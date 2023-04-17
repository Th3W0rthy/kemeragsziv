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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('flight_id');
            $table->string('name', 255);
            $table->string('sex', 6);
            $table->dateTime('birth');
            $table->string('email', 255);
            $table->string('phone', 12);
            $table->string('billing_name', 255);
            $table->string('country', 255);
            $table->integer('postcode');
            $table->string('settlement', 255);
            $table->string('address', 255);
            $table->integer('tax_number')->nullable();
            $table->integer('price');
            $table->integer('seat_id');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
