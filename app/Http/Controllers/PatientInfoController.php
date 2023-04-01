<?php

namespace App\Http\Controllers;

use App\Models\PatientInfo;
use App\Http\Requests\StorePatientInfoRequest;
use App\Http\Requests\UpdatePatientInfoRequest;

class PatientInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.patient_infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientInfoRequest $request)
    {
        $validated = $request->validated();
        PatientInfo::create($validated);
        return redirect('/patient_infos/'.auth()->user()->id)->with('status','Successfully saved information!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientInfo  $patientInfo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $patientInfo = PatientInfo::query()->where('user_id',auth()->user()->id)->first();
        return view('patient.patient_infos.show')->with('patientInfo',$patientInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientInfo  $patientInfo
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $patientInfo = PatientInfo::query()->where('user_id',auth()->user()->id)->first();
        return view('patient.patient_infos.edit')->with('patientInfo',$patientInfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientInfoRequest  $request
     * @param  \App\Models\PatientInfo  $patientInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientInfoRequest $request, PatientInfo $patientInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientInfo  $patientInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientInfo $patientInfo)
    {
        //
    }
}
