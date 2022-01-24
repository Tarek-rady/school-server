<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\blood;


use Illuminate\Database\Seeder;

class bloodsSeeder extends Seeder
{

    public function run()
    {
        DB::table('bloods')->delete();
        $bloods = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];

        foreach ($bloods as  $blood) {
           blood::create(['name'=>$blood]);
        }
    }
}
