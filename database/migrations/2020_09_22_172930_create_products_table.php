<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Запуск миграции
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table): void {
            $table->increments('id');
            $table->string('name', 150)->comment('Название продукта');
            $table->string('brand', 150)->comment('Бренд');
            $table->string('model', 150)->comment('Модель');
            $table->unsignedTinyInteger('type_id')->comment('Тип продукта');
            $table->decimal('price', 8, 2)->comment('Цена');
            $table->timestamps();
        });
    }

    /**
     * Удаление миграции
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('prodycts');
    }
}
