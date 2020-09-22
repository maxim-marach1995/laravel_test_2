<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    /**
     *
     * Отображение списка элементов
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $products = Product::with('product_type')->get();

        return view('welcome', compact('products'));
    }
}
