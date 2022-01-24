<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\specialization;
use App\Models\Gender;
use App\Models\Section;

class Teacher extends Model
{
    use HasFactory , HasTranslations;

    // trans
    public $translatable = ['name'];

    // Fillable
    protected $fillable = ['name' , 'Email' , 'password', 'specialization_id','gender_id' , 'Joining_Date' , 'Adress'];



    // العلاقه بين جدول المدرسين وجدول التخصصات
    public function specializations()
    {
         return $this->belongsTo(specialization::class , 'specialization_id');
    }


    // العلاقه بين جدول المدرسين وجدول النوع
    public function Genders()
    {
        return $this->belongsTo(Gender::class , 'gender_id');
    }

    // العلاقه بين المدرسين والاقسام
    public function sections()
    {
      return $this->belongsToMany(Section::class , 'teachers_sections');
    }

}
