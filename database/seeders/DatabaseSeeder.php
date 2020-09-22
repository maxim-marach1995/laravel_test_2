<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Запуск сидов
     *
     * @return void
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(ProductTypeSeeder::class);
    }
}
