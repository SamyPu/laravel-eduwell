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
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("00000000"),
            "role_id" => 1,
        ]);
        DB::table("users")->insert([
            "name" => "Samy",
            "email" => "samy@gmail.com",
            "password" => Hash::make("00000000"),
            "role_id" => 2,
        ]);
        DB::table("users")->insert([
            "name" => "Louis",
            "email" => "louis@gmail.com",
            "password" => Hash::make("00000000"),
            "role_id" => 3,
        ]);
        DB::table("users")->insert([
            "name" => "Didier",
            "email" => "dider@gmail.com",
            "password" => Hash::make("00000000"),
            "role_id" => 4,
        ]);
    }
}
