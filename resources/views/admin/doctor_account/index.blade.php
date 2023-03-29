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

                    {{ __("List of Doctor Accounts") }}
                    <a href="/admin/doctor-account/create" class="btn btn-primary">Add Doctor</a>
                    <a href="/admin/doctor-account/edit" class="btn btn-primary">Edit Doctor</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
