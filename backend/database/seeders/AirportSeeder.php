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
        DB::table("airports")->insert([
            [
                'name' => "Ferihegy International Airport",
                'iata' => "BUD",
                'time_zone' => "UTC+01:00",
                'phone' => "+36123456789",
                'email' => "repter@bud.hu",
                'website' => "https://www.bud.hu",
                'continent' => "Europe",
                'country' => "Hungary",
                'settlement' => "Budapest",
            ],
            [
                'name' => "Stansted",
                'iata' => "STN",
                'time_zone' => "UTC+00:00",
                'phone' => "+44123342345",
                'email' => "airport@stn.uk",
                'website' => "https://www.stanstedairport.com/",
                'continent' => "Europe",
                'country' => "United Kingdom",
                'settlement' => "London",
            ],
            [
                'name' => "Transylvania Airport",
                'iata' => "TGM",
                'time_zone' => "UTC+02:00",
                'phone' => "+40243565246",
                'email' => "aeroport@tgm.ro",
                'website' => "https://www.aeroportultransilvania.ro",
                'continent' => "Europa",
                'country' => "Romania",
                'settlement' => "Tirgu Mures",
            ],
            [
                'name' => "Frankfurt Airport",
                'iata' => "FRA",
                'time_zone' => "UTC+01:00",
                'phone' => "+49123553201",
                'email' => "flughafen@.de",
                'website' => "https://www.frankfurt-airport.com",
                'continent' => "Europa",
                'country' => "Germany",
                'settlement' => "Frankfurt",
            ]
        ]);
    }
}
