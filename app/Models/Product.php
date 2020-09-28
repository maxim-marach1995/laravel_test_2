<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class Product extends Model
{
    use HasFactory;

    /**
     *
     * Наименование таблицы
     *
     * @var string
     */
    protected $table = 'products';

    /**
     *
     * Аттрибуты для заполнения
     *
     * sort|unsignedTinyInteger - Поле для сортировки
     * name|string|max:150 - Наименование продукта
     * brand|string|max:150 - Бренд
     * model|string|max:150 - Модель
     * type_id|unsignedTinyInteger|max:255 - Тип продукта
     * price|decimal|max:255 - Цена
     *
     * @var array
     */
    protected $fillable = [
        'sort',
        'name',
        'brand',
        'model',
        'type_id',
        'price',
    ];

    /**
     *
     * Relation с таблицей product_types
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productType(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductType::class, 'id', 'type_id');
    }
}
