<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedingPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeding_plans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('food_id')->unsigned();
            $table->bigInteger('treatment_id')->unsigned();
            $table->string('duration',40);
            $table->string('quantity',40);
             $table->foreign('food_id')->references('id')->on('food')->onDelete('CASCADE');
             $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('CASCADE');

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
        Schema::dropIfExists('feeding_plans');
    }
}
