<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\religion;


class religionsSeeder extends Seeder
{

    public function run()
    {
      DB::table('religions')->delete();

      $religions = [

        [
            'en'=> 'Muslim',
            'ar'=> 'مسلم'
        ],
        [
            'en'=> 'Christian',
            'ar'=> 'مسيحي'
        ],
        [
            'en'=> 'Other',
            'ar'=> 'غيرذلك'
        ],







      ];

      foreach ($religions as  $religion) {

         religion::create(['name'=>$religion]);


      }









    }
}
