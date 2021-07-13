<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'numeric|unique:students',
            'major_id' => 'required|numeric',
            //required | allow only alphabets and spaces
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            //required | allow only alphabets and spaces
            'surname' => 'required|regex:/^[\pL\s\-]+$/u',
            'personal_id' => 'required|numeric|unique:students',
            'phone_number' => 'required|numeric|unique:students',
            'email' => 'required|unique:students',
            'address' => 'required',
            'date_of_birth' => 'required',
            'sex' => 'required|alpha'
        ];
    }
}
