<?php

namespace App\Models;
use App\Models\blood;
use App\Models\nationalite;
use App\Models\Section;
use App\Models\My_parent;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Student extends Model
{
    use HasFactory , HasTranslations;

    public $translatable = ['name'];
    protected $guarded = [];

    //  علاقه الطلاب مع النوع
    public function gender()
    {
         return $this->belongsTo( Gender::class , 'gender_id');
    }
     //  علاقه الطلاب مع الجنسيه
     public function nationalite()
     {
          return $this->belongsTo(nationalite::class , 'nationalite_id');
     }


      //  علاقه الطلاب مع فصيله الدم
    public function blood()
    {

         return $this->belongsTo(blood::class , 'blood_id');
    }


     //  علاقه الطلاب مع المراحل
     public function Grade()
     {

         return  $this->belongsTo(Grade::class , 'grade_id');
     }


      //  علاقه الطلاب مع الصفوف
    public function Classroom()
    {

         return $this->belongsTo(Classroom::class , 'classroom_id');
    }


     //  علاقه الطلاب مع الاقسام
     public function Sections()
     {

         return  $this->belongsTo(Section::class , 'section_id');
     }


      //  علاقه الطلاب مع اولياء الامور
    public function My_parent()
    {

         return $this->belongsTo(My_parent::class , 'parent_id');
    }














}
