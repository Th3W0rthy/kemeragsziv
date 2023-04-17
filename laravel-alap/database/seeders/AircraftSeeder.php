<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AircraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("aircrafts")->insert([
            [
                'airline_id' => "1",
                'manufacturer' => "Airbus",
                'model' => "A321 Neo Passenger",
            ],
            [
                'airline_id' => "2",
                'manufacturer' => "Boeing",
                'model' => "737-800 Winglet",
            ],
            [
                'airline_id' => "3",
                'manufacturer' => "Airbus",
                'model' => "A321 Passenger",
            ],
            [
                'airline_id' => "4",
                'manufacturer' => "Airbus",
                'model' => "A321 Passenger",
            ]
        ]);
    }
}
