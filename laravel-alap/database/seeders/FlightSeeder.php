<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("flights")->insert([
            [
                'number' => "",
                'departure' => "",
                'arrival' => "",
                'departure_airport' => "",
                'arrival_airport' => "",
                'airline' => "",
                'aircraft' => "",
                'cost' => "",
                'basic_price' => "",
            ],
            [
                'number' => "",
                'departure' => "",
                'arrival' => "",
                'departure_airport' => "",
                'arrival_airport' => "",
                'airline' => "",
                'aircraft' => "",
                'cost' => "",
                'basic_price' => "",
            ],
        ]);
    }
}
