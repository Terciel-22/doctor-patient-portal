<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientRouteController extends Controller
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
        return view('patient.home');
    }
    public function profile()
    {
        return view('patient.profile');
    }
    public function createDonor()
    {
        return view('patient.donor.create');
    }
    public function viewDonors()
    {
        return view('patient.donor.index');
    }
    public function viewDoctors()
    {
        return view('patient.doctor_account.index');
    }
    public function viewAppointments()
    {
        return view('patient.appointment.index');
    }
    public function createAppointment()
    {
        return view('patient.appointment.create');
    }
    public function editAppointment()
    {
        return view('patient.appointment.edit');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function doctorHome()
    {
        return view('doctorHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.home');
    }
}
