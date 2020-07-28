<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserSeederTable::class,
             Role::class,
             Priviledge::class,
             RolePriviledge::class,
             UserRole::class,
             UserPriviledge::class,
             FarmerTableSeeder::class,
             AnimalTableSeeder::class
             ]);
    }
}
