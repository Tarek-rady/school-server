<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\specialization;
use Illuminate\Support\Facades\DB;


class SpecializationSeed extends Seeder
{
    public function run()
    {



        DB::table('specializations')->delete();

$specializations = [

    ['en'=> 'Arabic', 'ar'=> 'عربي'],
    ['en'=> 'Sciences', 'ar'=> 'علوم'],
    ['en'=> 'Computer', 'ar'=> 'حاسب الي'],
    ['en'=> 'English', 'ar'=> 'انجليزي'],

];


foreach ($specializations as $specialization) {

    specialization::create(['name'=>$specialization]);

}
    }
}
