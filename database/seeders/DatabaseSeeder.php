<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *change bhaxa
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       /* DB::table('users')->insert([
             'name'=>Str::random(10),
'email' =>Str::random(10).'@gmail.com',
'address'=>Str:: random(10),
'phone'=>int::random(10),
'password'=>Hash::random(10),
         ]);
    }*/
    }
}


// php artisan db:seed -class=user