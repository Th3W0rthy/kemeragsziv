<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("airport")->insert([
            [
                'name' => "Ferihegy International Airport",
                'iata' => "BUD",
                'phone' => "+36123456789",
                'email' => "repter@bud.hu",
                'continent' => "Europe",
                'country' => "Hungary",
                'settlement' => "Budapest",
            ],
            [
                'name' => "Heathrow",
                'iata' => "LHR",
                'phone' => "+44123342345",
                'email' => "airport@lhr.uk",
                'continent' => "Europe",
                'country' => "United Kingdom",
                'settlement' => "London",
            ],
            [
                'name' => "Transylvania Airport",
                'iata' => "TGM",
                'phone' => "+40243565246",
                'email' => "aeroport@tgm.ro",
                'continent' => "Europa",
                'country' => "Romania",
                'settlement' => "Targu Mures",
            ],
            [
                'name' => "Frankfurt Airport",
                'iata' => "FRA",
                'phone' => "+49123553201",
                'email' => "flughafen@.de",
                'continent' => "Europa",
                'country' => "Germany",
                'settlement' => "Frankfurt",
            ]
        ]);
    }
}
