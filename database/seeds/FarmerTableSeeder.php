<?php

use Illuminate\Database\Seeder;

class FarmerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmers')->insert([
            'user_id' => 2,
            'farmer_name' => 'Ruwaida Jamal',
            'farmer_gender' => 'Female',
            'farmer_location' => 'Tunguu',
            'farmer_phone' => '0777287818'
        ]);

        DB::table('farmers')->insert([
            'user_id' => 3,
            'farmer_name' => 'Halim Juma',
            'farmer_gender' => 'Male',
            'farmer_location' => 'Fuoni',
            'farmer_phone' => '0777205881'
        ]);
    }
}
