<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;

class OrderController extends Controller
{
    /**
     *
     * Отображение списка элементов
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $orders = Order::with('product')
            ->get();

        return view('admin.orders.index', compact('orders'));
    }
}
