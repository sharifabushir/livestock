<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('farmer_id')->unsigned();
            $table->string('animal_type',40);
            $table->string('species',40);
            $table->string('animal_gender',40);
            $table->string('animal_location',40);
            // $table->string('age',20);
            $table->string('date_of_birth');
            $table->string('weight',20);
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('CASCADE');
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
        Schema::dropIfExists('animals');
    }
}
