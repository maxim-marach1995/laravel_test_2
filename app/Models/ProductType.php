<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    /**
     *
     * Наименование таблицы
     *
     * @var string
     */
    protected $table = 'product_types';

    /**
     *
     * Отключает установку created_at и updated_at
     * @var bool
     *
     */
    public $timestamps = false;

    /**
     *
     * Аттрибуты для заполнения
     *
     * type|string|max:150 - Тип продукта
     *
     * @var array
     */
    protected $fillable = [
        'type'
    ];
}
