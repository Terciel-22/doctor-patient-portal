<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientRouteController;
use App\Http\Controllers\DoctorRouteController;
use App\Http\Controllers\AdminRouteController;
use App\Http\Controllers\PatientInfoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(auth()->check())
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->role == 'doctor') {
            return redirect()->route('doctor.home');
        } else{
            return redirect()->route('patient.home');
        }
    } else 
    {
        return redirect('login');
    }
});

Route::middleware(['auth'])->group(function() {
    Route::get('/profile', function(){
        if (auth()->user()->role == 'admin') {
            return view('admin.profile');
        }else if (auth()->user()->role == 'doctor') {
            return view('doctor.profile');
        } else{
            return view('patient.profile');
        }
    });
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:patient'])->group(function () {
    Route::get('/home', [PatientRouteController::class, 'home'])->name('patient.home');
    Route::get('/donor/create', [PatientRouteController::class, 'createDonor']);
    Route::get('/doctors', [PatientRouteController::class, 'viewDoctors']);
    Route::get('/donors', [PatientRouteController::class, 'viewDonors']);
    Route::get('/appointments', [PatientRouteController::class, 'viewAppointments']);
    Route::get('/appointment/create', [PatientRouteController::class, 'createAppointment']);
    Route::get('/appointment/edit', [PatientRouteController::class, 'editAppointment']);
    Route::get('/insurance',function(){
        return view('patient.insurance');
    });
    Route::get('/medical-history', function(){
        return view('patient.medicalHistory');
    });
    Route::get('/profile/create',function(){
        return view('patient.profile.create');
    });
    Route::resource('/profile_infos',PatientInfoController::class);
});

/*------------------------------------------
--------------------------------------------
All Doctor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
  
    Route::get('/doctor/home', [DoctorRouteController::class, 'home'])->name('doctor.home');
    Route::get('/doctor/patient-accounts', [DoctorRouteController::class, 'viewPatientAccounts']);
    Route::get('/doctor/appointments', [DoctorRouteController::class, 'viewAppointments']);
    Route::get('/doctor/description/create', [DoctorRouteController::class, 'createDescription']);
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminRouteController::class, 'home'])->name('admin.home');
    Route::get('/admin/doctor-accounts', [AdminRouteController::class, 'viewDoctorAccounts']);
    Route::get('/admin/doctor-account/create', [AdminRouteController::class, 'createDoctorAccount']);
    Route::get('/admin/doctor-account/edit', [AdminRouteController::class, 'editDoctorAccount']);
    Route::get('/admin/patient-accounts', [AdminRouteController::class, 'viewPatientAccounts']);
    Route::get('/admin/appointments', [AdminRouteController::class, 'viewAppointments']);
    Route::get('/admin/donors', [AdminRouteController::class, 'viewDonors']);
});
