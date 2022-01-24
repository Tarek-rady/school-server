<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
{

    public function authorize()
    {
        return true ;
    }


    public function rules()
    {
        return [
            'name' =>'required|unique:students,name->ar,'.$this->id,
            'name_en' => 'required|unique:students,name->en,'.$this->id,
            'Email ' => 'required|email|unique:students,email,'.$this->id,
            'password' => 'required|string|min:6|max:15',
            'gender_id' => 'required',
            'nationalite_id' => 'required',
            'blood_id' => 'required',
            'Date_birth' => 'required',
            'grade_id' => 'required',
            'classroom_id' => 'required',
            'section_id' => 'required',
            'parent_id' => 'required',
            'academic_year' => 'required',
        ];
    }
}
