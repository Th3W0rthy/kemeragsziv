<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Class_aircraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes_aircrafts")->insert([
            [
                'class_id' => "1",
                'aircraft_id' => "1",
            ],
            [
                'class_id' => "2",
                'aircraft_id' => "1",
            ],
            [
                'class_id' => "1",
                'aircraft_id' => "2",
            ],
            [
                'class_id' => "2",
                'aircraft_id' => "2",
            ],
            [
                'class_id' => "1",
                'aircraft_id' => "3",
            ],
            [
                'class_id' => "2",
                'aircraft_id' => "3",
            ],
        ]);
    }
}
