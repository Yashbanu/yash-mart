<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCollection extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table("products")->insert(
        [
            'name'=>'pen',
            'category'=>'software',
            'price'=>50,
            'quantity'=>4,

        ]
      );
    }
}
