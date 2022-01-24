<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'list_Classes.*.name' => 'required|unique:classrooms,name->ar,'.$this->id,
            'list_Classes.*.Class_name_en' => 'required|unique:classrooms,name->en,'.$this->id,

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجي ادخال الحقل باللغه العربيه',
            'name.unique' => 'هذا الحقل موجود مسبقا',
            'Class_name_en.required' => 'يرجي ادخال الحقل باللغه الانجليزيه',
            'name_en.unique' => 'هذا الحقل موجود مسبقا',
        ];
    }
}
