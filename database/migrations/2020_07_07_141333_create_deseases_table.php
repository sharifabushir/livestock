<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deseases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('symptom_id')->unsigned();
            $table->string('desease_name',40);
            $table->string('desease_type',40);
            $table->string('desease_duration',40);
            $table->foreign('symptom_id')->references('id')->on('symptoms')->onDelete('CASCADE');
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
        Schema::dropIfExists('deseases');
    }
}
