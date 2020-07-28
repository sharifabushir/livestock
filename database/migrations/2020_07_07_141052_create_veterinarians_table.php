<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinarians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('veterinarian_name',40);
            $table->string('veterinarian_gender',40);
            $table->string('veterinarian_phone',40);
            $table->string('veterinarian_address',40);
            $table->string('veterinarian_email',40);
            $table->string('veterinarian_image',40);
            $table->string('veterinarian_status',40);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('veterinarians');
    }
}
