<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Priviledge extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_user']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_user']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_user']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_user']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_user']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_farmer']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_farmer']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_farmer']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_farmer']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_farmer']);


        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_veterinarian']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_veterinarian']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_veterinarian']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_veterinarian']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_veterinarian']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_animal']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_animal']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_animal']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_animal']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_animal']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_medicine']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_medicine']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_medicine']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_medicine']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_medicine']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_advice']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_food']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_food']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_food']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_food']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_food']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_desease']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_desease']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_desease']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_desease']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_desease']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_complain']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_complain']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_complain']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_complain']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_complain']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_treatment']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_treatment']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_treatment']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_treatment']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_treatment']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_feedingplan']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_feedingplan']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_feedingplan']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_feedingplan']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_feedingplan']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_symptoms']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_symptoms']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_symptoms']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_symptoms']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_symptoms']);

        DB::table('Priviledges')->insert(['priviledge_name'=>'delete_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'update_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'edit_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'view_advice']);
        DB::table('Priviledges')->insert(['priviledge_name'=>'create_advice']);
    }
}
