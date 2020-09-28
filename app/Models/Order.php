<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    /**
     *
     * Наименование таблицы
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     *
     * Аттрибуты для заполнения
     *
     * product_id|unsignedTinyInteger|max:255 - Продукт
     * user_id|unsignedSmallInteger|max:65535 - Пользователь
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'user_id',
    ];

    /**
     *
     * Relation с таблицей products
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    /**
     *
     * Relation с таблицей users
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
