<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Запуск миграции
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('product_id')->comment('Продукт');
            $table->unsignedSmallInteger('user_id')->comment('Пользователь');
            $table->timestamps();
        });
    }

    /**
     * Удаление миграции
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
