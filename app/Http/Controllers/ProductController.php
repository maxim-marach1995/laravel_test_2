<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductController extends Controller
{
    /**
     *
     * Отображение списка элементов
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        return view('admin.products.index');
    }

    /**
     *
     * Отображение формы создания
     *
     * @return \Illuminate\View\View
     */
    public function create(): \Illuminate\View\View
    {
        $productTypes = ProductType::all();

        return view('admin.products.create', compact('productTypes'));
    }

    /**
     *
     * Сохранение записи в БД
     *
     * @param  \App\Http\Requests  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'sort' => 'required|integer',
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type_id' => 'required|integer',
            'price' => 'numeric|max:999999,99',
        ], [
            'required' => 'Поле :attribute обязательно для заполнения',
            'max' => 'Максимальное возможное значение для :attribute равняется :max',
            'numeric' => 'Данные в поле :attribute должны быть числом',
        ]);

        Product::create($validated);

        return redirect()->route('products.index');
    }

    /**
     *
     * Отображение $product
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function show(Product $product)//: \Illuminate\View\View
    {
        //
    }

    /**
     *
     * Отображение формы редактирования $product
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product): \Illuminate\View\View
    {
        $productTypes = ProductType::all();

        return view('admin.products.update', compact('product','productTypes'));
    }

    /**
     *
     * Обновляет данные о $product
     *
     * @param  \App\Http\Requests\  $request
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'sort' => 'required|integer',
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type_id' => 'required|integer',
            'price' => 'numeric|max:999999,99',
        ], [
            'required' => 'Поле :attribute обязательно для заполнения',
            'max' => 'Максимальное возможное значение для :attribute равняется :max',
            'numeric' => 'Данные в поле :attribute должны быть числом',
        ]);

        $product->update($validated);

        return redirect()->route('products.index');
    }

    /**
     *
     * Удаление $product из БД
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product): \Illuminate\Http\RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
