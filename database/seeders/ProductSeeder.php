<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Запуск сидов
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Видеокарта GTX 780',
                'brand' => 'Gigabit',
                'model' => 'gtx 370',
                'type_id' => 1,
                'price' => 20000,
            ],
            [
                'name' => 'Видеокарта RTX 3080',
                'brand' => 'nvidia',
                'model' => 'rtx 780',
                'type_id' => 1,
                'price' => 65000,
            ],
            [
                'name' => 'Процесов intel core i9 10900k',
                'brand' => 'intel',
                'model' => 'i9 10900k',
                'type_id' => 1,
                'price' => 60000,
            ],
            [
                'name' => 'Майка Livise',
                'brand' => 'Livise',
                'model' => 'livise 2m',
                'type_id' => 3,
                'price' => 5000,
            ],
            [
                'name' => 'Джинсы fred perry',
                'brand' => 'Fred perry',
                'model' => 'fred perry 2k',
                'type_id' => 3,
                'price' => 10000,
            ],
            [
                'name' => 'Кросовки Adidas',
                'brand' => 'Adidas',
                'model' => 'spezial',
                'type_id' => 3,
                'price' => 13000,
            ],
            [
                'name' => 'Катер на радиоуправлении',
                'brand' => 'Биг-мастер',
                'model' => '978-5',
                'type_id' => 2,
                'price' => 3000,
            ],
            [
                'name' => 'Аккумуляторная дрель-шуруповерт DeWALT DCD 771 C2',
                'brand' => 'DeWALT',
                'model' => 'DCD 771 C2',
                'type_id' => 4,
                'price' => 8600,
            ],
        ]);
    }
}
