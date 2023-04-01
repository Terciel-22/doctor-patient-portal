<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'birthdate',
        'patient_phone',
        'gender',
        'address',
        'city',
        'zip',
        'ssn',
        'occupation',
        'employer',
        'marital_status',
        'spouse_name',
        'emergency_contact',
        'emergency_relationship',
        'emergency_contact_phone',
        'parent_name',
        'parent_phone',
    ];
}
