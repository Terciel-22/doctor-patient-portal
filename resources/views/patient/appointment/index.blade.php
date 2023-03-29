@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __("Patient's Appointments") }}
                    <a href="/appointment/create" class="btn btn-primary">Book Appointment</a>
                    <a href="/appointment/edit" class="btn btn-primary">Edit Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
