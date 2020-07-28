<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('veterinarian_id')->unsigned();
            $table->bigInteger('animal_id')->unsigned();
            $table->bigInteger('symptom_id')->unsigned();
            $table->bigInteger('farmer_id')->unsigned();
            $table->string('title',40);
            $table->string('status',40);
            $table->foreign('veterinarian_id')->references('id')->on('veterinarians')->onDelete('CASCADE');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('CASCADE');
            $table->foreign('symptom_id')->references('id')->on('symptoms')->onDelete('CASCADE');
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
        Schema::dropIfExists('complains');
    }
}
