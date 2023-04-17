<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'password' => "jelszo12345",
            ],
            [
                'name' => "repulunk",
                'email' => "vasszoltan@gmail.com",
                'password' => "password12345",
            ],
        ]);
    }
}
