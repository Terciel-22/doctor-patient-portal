<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorRouteController extends Controller
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
        return view('doctor.home');
    }
    public function viewPatientAccounts()
    {
        return view('doctor.patient_account.index');
    }
    public function viewAppointments()
    {
        return view('doctor.appointment.index');
    }
    public function createDescription()
    {
        return view('doctor.description.create');
    }
}
