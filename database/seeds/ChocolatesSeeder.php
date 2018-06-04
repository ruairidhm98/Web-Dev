<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChocolatesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('chocolates')->insert([
            'type' => 'Dairy Milk',
            'calories' => 240,
            'fat' => 14,
            'milk' => true,
        ]);

        DB::table('chocolates')->insert([
            'type' => 'Milky Way',
            'calories' => 264,
            'fat' => 10,
            'milk' => true,
        ]);

        DB::table('chocolates')->insert([
            'type' => "Green & Blacks Organic",
            'calories' => 240,
            'fat' => 17,
            'milk' => false,
        ]);

    }
}
