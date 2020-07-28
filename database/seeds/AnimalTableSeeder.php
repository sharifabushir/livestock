<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'farmer_id' => 1,
            'animal_type' => 'Ng\'ombe',
            'species' => 'Habivorous',
            'animal_gender' => 'Male',
            'animal_location' => 'Bumbwini',
            'weight'=> '150 kg',
            'date_of_birth' => '10-10-2010',

        ]);

        DB::table('animals')->insert([
            'farmer_id' => 2,
            'animal_type' => 'Ng\'ombe',
            'species' => 'Habivorous',
            'animal_gender' => 'Male',
            'animal_location' => 'Bungi',
            'weight'=> '150 kg',
            'date_of_birth' => '2-09-2007',
            
        ]);

        DB::table('animals')->insert([
            'farmer_id' => 1,
            'animal_type' => 'Ng\'ombe',
            'species' => 'Habivorous',
            'animal_gender' => 'Male',
            'animal_location' => 'Bumbwini',
            'weight'=> '150 kg',
            'date_of_birth' => '2-02-2020',
            
        ]);
    }
}
