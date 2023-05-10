<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Airbus A321 Neu Passanger
        //1. class
        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                DB::table("seats")->insert([
                    [
                        'aircraft_id' => "1",
                        'class_id' => "1",
                        'seat_row' => $i,
                        'seat_col' => $j,
                    ],
                ]);
            }
        }
        
        //2. class
        for ($i = 1; $i <= 27; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                DB::table("seats")->insert([
                    [
                        'aircraft_id' => "1",
                        'class_id' => "2",
                        'seat_row' => $i,
                        'seat_col' => $j,
                    ],
                ]);
            }
        }

        //Boeing 737-800 Winglet
        //1. class
        for ($i = 1; $i <= 9; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                DB::table("seats")->insert([
                    [
                        'aircraft_id' => "2",
                        'class_id' => "1",
                        'seat_row' => $i,
                        'seat_col' => $j,
                    ],
                ]);
            }
        }

        //2. class
        for ($i = 1; $i <= 24; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                DB::table("seats")->insert([
                    [
                        'aircraft_id' => "2",
                        'class_id' => "2",
                        'seat_row' => $i,
                        'seat_col' => $j,
                    ],
                ]);
            }
        }

        //Airbus A321 Passenger
        //1. class
        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                DB::table("seats")->insert([
                    [
                        'aircraft_id' => "3",
                        'class_id' => "1",
                        'seat_row' => $i,
                        'seat_col' => $j,
                    ],
                ]);
            }
        }

        //2. class
        for ($i = 1; $i <= 27; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                DB::table("seats")->insert([
                    [
                        'aircraft_id' => "3",
                        'class_id' => "2",
                        'seat_row' => $i,
                        'seat_col' => $j,
                    ],
                ]);
            }
        }
    }
}
