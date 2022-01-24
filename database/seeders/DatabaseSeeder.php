<?php

namespace Database\Seeders;
use Database\Seeders\bloodsSeeder;
use Database\Seeders\nationalitiesSeeder;
use Database\Seeders\religionsSeeder;
use Database\Seeders\SpecializationSeed;
use Database\Seeders\GenderSeeder;




use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       $this->call(bloodsSeeder::class);
       $this->call(nationalitiesSeeder::class);
       $this->call(religionsSeeder::class);
       $this->call(SpecializationSeed::class);
       $this->call(GenderSeeder::class);




    }
}
