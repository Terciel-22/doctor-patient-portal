@extends('layouts.app')

@section('content')
<a href="/profile" class="btn"><span class="material-icons">arrow_back</span></a>
<div class="container">
    <form class="mt-3">
        <h2>Insurance Information</h2>
        <hr>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="insurance_company">Insurance Company</label>
                <input class="form-control" type="text" name="insurance_company" id="insurance_company">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="insurance_id">Insurance ID No.</label>
                <input class="form-control" type="text" name="insurance_id" id="insurance_id">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="insurance_plan">Plan</label>
                <input class="form-control" type="text" name="insurance_plan" id="insurance_plan">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="insurance_group">Group</label>
                <input class="form-control" type="text" name="insurance_group" id="insurance_group">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="ph_name">Policy Holder's Name</label>
                <input class="form-control" type="text" name="ph_name" id="ph_name">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="ph_birthdate">Date of Birth</label>
                <input class="form-control" type="date" name="ph_birthdate" id="ph_birthdate">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="ph_employer">Policy Holder's Employer</label>
                <input class="form-control" type="text" name="ph_employer" id="ph_employer">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="ph_relationship">Relationship to Patient</label>
                <input class="form-control" type="text" name="ph_relationship" id="ph_relationship">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="pcp">Primary Care Physician</label>
                <input class="form-control" type="text" name="pcp" id="pcp">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="pcp_phone">Phone Number</label>
                <input class="form-control" type="tel" name="pcp_phone" id="pcp_phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group mb-2 col-md-8">
                <label for="pharmacy">Prefered Pharmacy</label>
                <input class="form-control" type="text" name="pharmacy" id="pharmacy">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="pharmacy_phone">Phone Number.</label>
                <input class="form-control" type="tel" name="pharmacy_phone" id="pharmacy_phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-2">Save</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>
@endsection
