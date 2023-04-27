<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                'name' => "tesztelek",
                'email' => "tesztelek@gmail.com",
                'password' => Hash::make("jelszo12345"),
                'role' => null,
            ],
            [
                'name' => "repulunk",
                'email' => "vasszoltan@gmail.com",
                'password' => Hash::make("password12345"),
                'role' => null,
            ],
            [
                'name' => "admin",
                'email' => "admin@gmail.com",
                'password' => Hash::make("admin"),
                'role' => "admin",
            ],
            [
                'name' => "CelebiGH01",
                'email' => "celebigh01@gmail.com",
                'password' => Hash::make("password12345"),
                'role' => "gh",
            ],
            [
                'name' => "FlightOperator01",
                'email' => "flightoperator01@gmail.com",
                'password' => Hash::make("password12345"),
                'role' => "fo",
            ],
        ]);
    }
}
