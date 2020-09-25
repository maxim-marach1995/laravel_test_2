<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    /**
     *
     * @var $products - Элементы
     * @var $search - Строка для поиска
     * @var $sortField - Поле для сортировки
     * @var $sortType - Тип сортировки
     */
    public $products;
    public $search;
    public $sortField = 'sort';
    public $sortType = 'asc';

    /**
     *
     * Метод устанавливает поле и тип сортировки
     *
     * @return bool
     */
    public function sort($sortField): bool
    {
        if($sortField == $this->sortField)
        {
            $this->sortType = $this->sortType == 'desc' ? 'asc' : 'desc';
        } else {
            $this->sortType = 'desc';
        }

        $this->sortField = $sortField;

        $this->render();

        return true;
    }

    /**
     *
     * Метод удаляет элемент
     *
     * @return bool
     */
    public function destroy($id): bool
    {
        Product::find($id)->delete();

        $this->render();

        return true;
    }

    /**
     *
     * Рендер страницы
     *
     * @return \Illuminate\View\View
     */
    public function render(): \Illuminate\View\View
    {
        $products = Product::select();

        $products->orderBy($this->sortField, $this->sortType);

        if($this->search)
        {
            $products->where('name', 'like', '%' . $this->search . '%');
        }

        $this->products = $products->get();

        return view('admin.livewire.products');
    }
}
