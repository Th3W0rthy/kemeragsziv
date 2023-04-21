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
                'number' => "W60001",
                'departure' => "2023.04.26 09:00",
                'arrival' => "2023.04.26 10:05",
                'departure_airport' => "1",
                'arrival_airport' => "2",
                'airline_id' => "1",
                'aircraft_id' => "1",
                'cost' => "1000000",
                'basic_price' => "25000",
            ],
            [
                'number' => "FR0001",
                'departure' => "2023.04.26 09:15",
                'arrival' => "2023.04.26 11:50",
                'departure_airport' => "1",
                'arrival_airport' => "3",
                'airline_id' => "2",
                'aircraft_id' => "2",
                'cost' => "1000000",
                'basic_price' => "25000",
            ],
        ]);
    }
}
