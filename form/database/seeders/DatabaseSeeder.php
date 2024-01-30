<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            "name"=> "yash",
            "email"=> "yash@gmail.com",
            "password"=> "yash",
        ]);

        User::create([
            "name"=> "op",
            "email"=> "op@gmail.com",
            "password"=> "op",
        ]);
    }
}
