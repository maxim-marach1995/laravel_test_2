<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Products extends Component
{
    use WithPagination;
    /**
     *
     * @var $products - Элементы
     * @var $search - Строка для поиска
     * @var $sortField - Поле для сортировки
     * @var $sortType - Тип сортировки
     * @var $paginationTheme - Тема пагинатора
     */
    public $search;
    public $sortField = 'sort';
    public $sortType = 'asc';
    protected $paginationTheme = 'bootstrap';

    /**
     *
     * Метод устанавливает поле и тип сортировки
     *
     * @return void
     */
    public function sort($sortField): void
    {
        if($sortField == $this->sortField)
        {
            $this->sortType = $this->sortType == 'desc' ? 'asc' : 'desc';
        } else {
            $this->sortType = 'asc';
        }

        $this->sortField = $sortField;
    }

    /**
     *
     * Метод удаляет элемент
     *
     * @return void
     */
    public function destroy($id): void
    {
        Product::find($id)->delete();
    }

    /**
     *
     * Рендер страницы
     *
     * @return \Illuminate\View\View
     */
    public function render(): \Illuminate\View\View
    {
        $products = Product::with('productType');

        if($this->search)
        {
            $products->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('brand', 'like', '%' . $this->search . '%')
                ->orWhere('model', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%')
                ->orWhereHas('productType', function (Builder $query) {
                    $query->where('type', 'like', '%' . $this->search . '%');
                });
        }

        $products = $products->orderBy($this->sortField, $this->sortType)->paginate(5);

        return view('livewire.admin.products', compact('products'));
    }
}
