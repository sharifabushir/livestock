<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserPriviledge extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>1]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>2]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>3]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>4]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>5]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>6]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>7]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>8]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>9]);
        DB::table('user_priviledges')->insert(['user_id'=>1,'priviledge_id'=>10]);

    }
}
