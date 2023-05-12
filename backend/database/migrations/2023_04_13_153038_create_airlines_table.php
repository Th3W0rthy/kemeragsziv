<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('phone', 12)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('iata', 2)->nullable();
            $table->string('icao', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airlines');
    }
};
