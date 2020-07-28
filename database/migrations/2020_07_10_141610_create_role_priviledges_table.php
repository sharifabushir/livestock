<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePriviledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_priviledges', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('priviledge_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('priviledge_id')->references('id')->on('priviledges')->onDelete('CASCADE');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_priviledges');
    }
}
