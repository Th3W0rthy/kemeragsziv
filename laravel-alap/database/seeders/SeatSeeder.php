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
        DB::table("seats")->insert([
            [
                'aircraft_id' => "1",
                'class_id' => "1",
                'seat_row' => "1",
                'seat_col' => "1",
            ],
            [
                'aircraft_id' => "1",
                'class_id' => "1",
                'seat_row' => "1",
                'seat_col' => "2",
            ],
            [
                'aircraft_id' => "2",
                'class_id' => "2",
                'seat_row' => "5",
                'seat_col' => "2",
            ],
        ]);
    }
}
