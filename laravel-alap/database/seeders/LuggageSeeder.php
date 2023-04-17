<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuggageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("luggages")->insert([
            [
                'ticket_id' => "1",
                'tag' => "",
                'size' => "M",
                'price' => "10000",
            ],
            [
                'ticket_id' => "2",
                'tag' => "",
                'size' => "M",
                'price' => "10000",
            ],
            [
                'ticket_id' => "3",
                'tag' => "",
                'size' => "M",
                'price' => "10000",
            ],
            [
                'ticket_id' => "3",
                'tag' => "",
                'size' => "L",
                'price' => "20000",
            ],
        ]);
    }
}
