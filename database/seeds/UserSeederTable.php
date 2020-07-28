<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'shery',
            'email'=>'shery@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('12345')
        ]);

        DB::table('users')->insert([
            'name'=>'ruu',
            'role'=>'farmer',
            'email'=>'ruu@gmail.com',
            'password'=>Hash::make('12345')
        ]);


        DB::table('users')->insert([
            'name'=>'halim',
            'role'=>'veterinarian',
            'email'=>'halim@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
