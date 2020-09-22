<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Запуск сидов
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('product_types')->insert([
            ['type' => 'Бытовая техника'],
            ['type' => 'Игрушки'],
            ['type' => 'Одежда'],
            ['type' => 'Интсрументы'],
        ]);
    }
}
