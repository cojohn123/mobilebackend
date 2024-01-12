<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("users")->insert([
            "name"=>"Wanasree",
            "password"=>md5("12345"),
            "email"=>"642021158@tsu.ac.th",
            "address"=>"tsu",
            "telephone"=>"0987654321"
        ],
        [
            "name"=>"Wanasree2",
            "password"=>md5("12346"),
            "email"=>"642021158b@tsu.ac.th",
            "address"=>"tsu",
            "telephone"=>"0987654321"
        ],
        [
            "name"=>"Wanasree3",
            "password"=>md5("12347"),
            "email"=>"642021158c@tsu.ac.th",
            "address"=>"tsu",
            "telephone"=>"0987654321"
        ]
        );
    }
}
