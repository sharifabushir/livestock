<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name'=>'Admin'
        ]);

        DB::table('roles')->insert([
            'role_name'=>'Veterinarian'
        ]);

        DB::table('roles')->insert([
            'role_name'=>'Farmer'
        ]);
    }
}
