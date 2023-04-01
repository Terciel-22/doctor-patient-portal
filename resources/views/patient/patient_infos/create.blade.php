@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('status'))
        <div class="alert alert-success my-3">
            {{ session()->get('status') }}
        </div>
    @endif
    <form method="POST" action="{{ url('/patient_infos') }}">
        @csrf
        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
        <h2>Patient Information</h2>
        <hr>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" value="{{ auth()->user()->name }}" disabled>
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}" disabled>
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-4">
                <label for="birthdate">Date of Birth</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="birthdate" id="birthdate">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="patient_phone">Phone Number</label>
                <input type="tel" class="form-control @error('patient_phone') is-invalid @enderror" id="patient_phone" name="patient_phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                    <option value="" selected hidden>--Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address">
            </div>
            <div class="form-group mb-2 col-md-3">
                <label for="city">City</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city">
            </div>
            <div class="form-group mb-2 col-md-3">
                <label for="zip">ZIP code</label>
                <input type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" id="zip">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-4">
                <label for="ssn">Social Security Number</label>
                <input type="text" class="form-control @error('ssn') is-invalid @enderror" name="ssn" id="ssn">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="occupation">Occupation</label>
                <input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" id="occupation">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="employer">Employer</label>
                <input type="text" class="form-control @error('employer') is-invalid @enderror" name="employer" id="employer">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-4">
                <label for="marital_status">Marital Status</label>
                <select class="form-control @error('marital_status') is-invalid @enderror" name="marital_status" id="marital_status">
                    <option value="" selected hidden>--Marital Status--</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
            <div class="form-group mb-2 col-md-8">
                <label for="spouse_name">Spouse' Name</label>
                <input type="text" class="form-control @error('spouse_name') is-invalid @enderror" name="spouse_name" id="spouse_name" disabled>
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-6">
                <label for="emergency_contact">Emergency Contact </label>
                <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror" name="emergency_contact" id="emergency_contact">
            </div>
            <div class="form-group mb-2 col-md-3">
                <label for="emergency_relationship">Relationship </label>
                <input type="text" class="form-control @error('emergency_relationship') is-invalid @enderror" name="emergency_relationship" id="emergency_relationship">
            </div>
            <div class="form-group mb-2 col-md-3">
                <label for="emergency_contact_phone">Phone Number </label>
                <input type="tel" class="form-control @error('emergency_contact_phone') is-invalid @enderror" name="emergency_contact_phone" id="emergency_contact_phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
            </div>
        </div>
        <div class="row mb-2">
            <p class="text-secondary font-italic my-0 text-center">If the patient is minor (under the age of 18), please provide information for the parent or legal guardian.</p>
            <div class="form-group mb-2 col-md-8">
                <label for="parent_name">Parent/Legal Guardian Name</label>
                <input type="text" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" id="parent_name">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="parent_phone">Phone Number</label>
                <input type="tel" class="form-control @error('parent_phone') is-invalid @enderror" name="parent_phone" id="parent_phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="/medical-history" class="btn btn-light">Medical History</a>
                <a href="/insurance" class="btn btn-light">Add Insurance</a>
            </div>
            <div>
                <button type="submit" class="btn btn-primary me-2">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection
