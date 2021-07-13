<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LecturerRequest extends FormRequest
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
            'id'=>'numeric|unique:lecturers',
            //required | allow only alphabets and spaces
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            //required | allow only alphabets and spaces
            'surname'=>'required|regex:/^[\pL\s\-]+$/u',
            'personal_id'=>'required|numeric|unique:lecturers',
            'phone_number'=>'required|numeric|unique:lecturers',
            'email'=>'required|unique:lecturers',
            'address'=>'required',
            'date_of_birth'=>'required',
            'sex'=>'required|alpha',
            //required | without spaces
            'bank_account_number'=>'required|regex:/^\S*$/u',
            //required | only alphabets with spaces
            'ranks'=>'required|regex:/^[\pL\s\-]+$/u',
        ];
    }
}
