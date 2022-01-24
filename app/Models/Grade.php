<?php

namespace App\Models;
use App\Models\Section;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Grade extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];
    protected $fillable = ['name' , 'notes'];

    public function Sections()
    {
        return $this->hasMany(Section::class , 'grade_id');
    }
}
