<?php

namespace App\Models;
use App\Models\Classroom;
use App\Models\Grade;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Teacher;

class Section extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['Section_name'];
    protected $fillable = ['Section_name' , 'grade_id' , 'classroom_id' , 'status'];

    // Get Grade
    public function Grade(){

     return $this->belongsTo(Grade::class , 'grade_id');

    }

     // Get Class
       public function Classes(){

        return $this->belongsTo(Classroom::class , 'classroom_id');
         }



        public function teachers()
        {
             return $this->belongsToMany(Teacher::class , 'teachers_sections');
        }



}
