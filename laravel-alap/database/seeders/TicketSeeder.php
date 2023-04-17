<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tickets")->insert([
            [
                'user_id' => "1",
                'flight_id' => "1",
                'name' => "Teszt Elek",
                'sex' => "male",
                'birth' => "1998.06.12",
                'email' => "tesztelek@gmail.com",
                'phone' => "+36305435435",
                'billing_name' => "Teszt Elek",
                'counrty' => "Hungary",
                'postcode' => "2234",
                'settlement' => "Maglód",
                'address' => "Kis utca 14",
                'tax_number' => "",
                'price' => "25000",
                'seat_id' => "1",
            ],
            [
                'user_id' => "1",
                'flight_id' => "1",
                'name' => "Teszt Elekné",
                'sex' => "female",
                'birth' => "1999.10.14",
                'email' => "tesztelekne@gmail.com",
                'phone' => "+36312343456",
                'billing_name' => "Teszt Elekné",
                'counrty' => "Hungary",
                'postcode' => "2234",
                'settlement' => "Maglód",
                'address' => "Kis utca 14",
                'tax_number' => "",
                'price' => "25000",
                'seat_id' => "2",
            ],
            [
                'user_id' => "2",
                'flight_id' => "2",
                'name' => "Vass Zoltán",
                'sex' => "male",
                'birth' => "1970.12.10",
                'email' => "vasszoltan@gmail.com",
                'phone' => "+36201234342",
                'billing_name' => "Vass Zoltán",
                'counrty' => "Hungary",
                'postcode' => "2233",
                'settlement' => "Ecser",
                'address' => "Petőfi utca 111/b",
                'tax_number' => "",
                'price' => "50000",
                'seat_id' => "3",
            ],
        ]);
    }
}
