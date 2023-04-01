<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'birthdate' => 'required|date',
            'patient_phone' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'ssn' => 'string|nullable',
            'occupation' => 'string|nullable',
            'employer' => 'string|nullable',
            'marital_status' => 'required|string',
            'spouse_name' => 'string',
            'emergency_contact' => 'required|string',
            'emergency_relationship' => 'required|string',
            'emergency_contact_phone' => 'required|string',
            'parent_name' => 'string|nullable',
            'parent_phone' => 'string|nullable',
        ];
    }
}
