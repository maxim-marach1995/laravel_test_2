<div class="mt-3">
    <input class="form-control mr-sm-2" wire:model="search" type="search" placeholder="Поиск по наименованию" aria-label="Поиск">
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col" wire:click="sort('sort')">Сортировка</th>
            <th scope="col" wire:click="sort('name')">Наименование продукта</th>
            <th scope="col" wire:click="sort('brand')">Бренд</th>
            <th scope="col" wire:click="sort('model')">Модель</th>
            <th scope="col">Тип продукта</th>
            <th scope="col" wire:click="sort('price')">Цена</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->sort }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->model }}</td>
                    <td>{{ $product->product_type->type }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <button type="submit" wire:click="destroy({{ $product->id }})" class="btn btn-danger">Удалить</button>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">Редактировать</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Нет элементов</td>
                </tr>
            @endempty
        </tbody>
    </table>
</div>
