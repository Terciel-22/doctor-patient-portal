<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRouteController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('admin.home');
    }
    public function viewDoctorAccounts()
    {
        return view('admin.doctor_account.index');
    }
    public function createDoctorAccount()
    {
        return view('admin.doctor_account.create');
    }
    public function editDoctorAccount()
    {
        return view('admin.doctor_account.edit');
    }
    public function viewPatientAccounts()
    {
        return view('admin.patient_account.index');
    }
    public function viewAppointments()
    {
        return view('admin.appointment.index');
    }
    public function viewDonors()
    {
        return view('admin.donor.index');
    }
}
