<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('_temp_users')->insert(
            [
                [
                    'name'=>str::random(20),
                    'mobile'=>9650041932,
                    'email'=>Str::random(10).'@gmail.com',
                    'password'=>Hash::make('password'),
                    'pin'=>23788
                ],
                [
                    'name'=>'Akash',
                    'mobile'=>9650041932,
                    'email'=>'akash@gmail.com',
                    'password'=>Hash::make('password'),
                    'pin'=>23788,
                ],
                [
                    'name'=>'Ram',
                    'mobile'=>9668041932,
                    'email'=>'ram@gmail.com',
                    'password'=>Hash::make('password'),
                    'pin'=>98786,
                ]
            ]);
    }
}
