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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('number',10);
            $table->dateTimeTz('departure');
            $table->dateTimeTz('arrival');
            $table->integer('departure_airport');
            $table->integer('arrival_airport');
            $table->integer('airline_id');
            $table->integer('aircraft_id');
            $table->integer('cost');
            $table->integer('basic_price');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
