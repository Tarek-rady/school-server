<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Gender;

class GenderSeeder extends Seeder
{

    public function run()
    {


      DB::table('genders')->delete();

      $Genders = [

        ['ar' => 'ذكر' , 'en' => 'male']  ,
         ['ar' => 'انثي' , 'en' => 'female']


      ];

      foreach ($Genders as  $Gender) {

        Gender::create(['name'=>$Gender]);

      }





    }
}
