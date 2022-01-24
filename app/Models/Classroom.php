<?php

namespace App\Models;

use App\Models\Grade;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Classroom extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $fillable = ['name' , 'grade_id'];

    public function Grades()
    {
        return $this->belongsTo(Grade::class  ,'grade_id');
    }

}
