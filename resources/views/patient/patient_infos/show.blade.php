@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show Patient Info</h1>
    @if (!is_null($patientInfo))
        @if(session()->has('status'))
            <div class="alert alert-success my-3">
                {{ session()->get('status') }}
            </div>
        @endif
        <a href="{{ url('/patient_infos/'.auth()->user()->id.'/edit') }}" class="btn btn-light">Edit patient details</a>
        <p>{{ $patientInfo->zip }}</p>
    @else
        <a href="/patient_infos/create" class="btn btn-light">Add patient details</a>
    @endif
</div>
@endsection
