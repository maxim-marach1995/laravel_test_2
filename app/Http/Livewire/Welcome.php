<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Order;

class Welcome extends Component
{
    use WithPagination;
    /**
     * @var $paginationTheme - Тема пагинатора
     */
    protected $paginationTheme = 'bootstrap';

    /**
     *
     * Метод добавляет продукт
     *
     * @return void
     */
    public function addProduct($id): void
    {
        Order::create([
            'product_id' => $id,
        ]);
    }

    /**
     *
     * Рендер страницы
     *
     * @return \Illuminate\View\View
     */
    public function render(): \Illuminate\View\View
    {
        $products = Product::with('productType')->paginate(5);

        return view('livewire.client.welcome', compact('products'));
    }
}
