<?php

namespace App\Models;
use App\Models\blood;
use App\Models\nationalite;
use App\Models\religion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class My_parent extends Model
{
    use HasFactory , HasTranslations;

    public $translatable = ['name_father' , 'name_mother'];

    protected $guarded = [];


    // علاقه ولي الامر ب فصيله الدم
    public function blood()
    {
        return $this->belongsTo(blood::class , 'blood_father_id' );
    }

    // علاقه ولي الامر ب الديانه
    public function religion()
    {
        return $this->belongsTo(religion::class , 'religion_father_id');
    }


    //  علاقه ولي الامر ب الجنسيه
    public function nationalite()
    {
        return $this->belongsTo(nationalite::class , 'nationalite_father_id');
    }

}
