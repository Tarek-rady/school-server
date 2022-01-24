<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGradeRequest extends FormRequest
{

    public function authorize()
    {
        return true;

    }

    public function rules()
    {
        return [

            'name' => 'required|unique:grades,name->ar,'.$this->id,
            'name_en' => 'required|unique:grades,name->en,'.$this->id,

        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'يرجي ادخال الحقل باللغه العربيه',
            'name.unique' => 'هذا الحقل موجود مسبقا',
            'name_en.required' => 'يرجي ادخال الحقل باللغه الانجليزيه',
            'name_en.unique' => 'هذا الحقل موجود مسبقا',
        ];
    }


}
