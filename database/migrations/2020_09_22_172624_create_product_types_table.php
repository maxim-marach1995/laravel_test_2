<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTable extends Migration
{
    /**
     * Запуск миграции
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table): void {
            $table->tinyIncrements('id');
            $table->string('type', 150)->comment('Тип продукта');
        });
    }

    /**
     * Удаление миграции
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
}
