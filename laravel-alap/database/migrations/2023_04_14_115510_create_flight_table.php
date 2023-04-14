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
        Schema::create('flight', function (Blueprint $table) {
            $table->id();
            $table->integer('luggage_id');
            $table->integer('airport_id');
            $table->dateTimeTz('departure');
            $table->dateTimeTz('arrival');
            $table->integer('arrival_airport');
            $table->integer('arrival_airport');
            $table->integer('airline');
            $table->integer('aircraft');
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
        Schema::dropIfExists('flight');
    }
};
