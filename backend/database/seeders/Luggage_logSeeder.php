<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Luggage_logSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("luggages_logs")->insert([
            [
                'luggage_id' => "1",
                'airport_id' => "1",
            ],
            [
                'luggage_id' => "2",
                'airport_id' => "1",
            ],
            [
                'luggage_id' => "3",
                'airport_id' => "1",
            ],
            [
                'luggage_id' => "4",
                'airport_id' => "1",
            ],
        ]);
    }
}
