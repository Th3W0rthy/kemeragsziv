<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("airlines")->insert([
            [
                'name' => "Wizz Air",
                'phone' => "",
                'email' => "",
                'website' => "https://wizzair.com",
                'iata' => "W6",
                'icao' => "WZZ",
            ],
            [
                'name' => "Ryan Air",
                'phone' => "",
                'email' => "",
                'website' => "https://www.ryanair.com",
                'iata' => "FR",
                'icao' => "RYR",
            ],
            [
                'name' => "Lufthansa",
                'phone' => "",
                'email' => "",
                'website' => "https://www.lufthansa.com",
                'iata' => "LH",
                'icao' => "DLH",
            ],
            [
                'name' => "United Airlines",
                'phone' => "",
                'email' => "",
                'website' => "https://www.united.com",
                'iata' => "UA",
                'icao' => "UAL",
            ]
        ]);
    }
}
