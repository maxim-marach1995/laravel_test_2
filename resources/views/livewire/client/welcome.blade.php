<div class="mb-4 mt-5">
    @foreach($products as $product)
        <div class="card">
            <div class="card-body">
                <p class="card-text"><b>Наименование продукта:</b> {{ $product->name }}</p>
                <p class="card-text"><b>Бренд:</b> {{ $product->brand }}</p>
                <p class="card-text"><b>Модель:</b> {{ $product->model }}</p>
                <p class="card-text">Тип продукта:</b> {{ $product->productType->type }}</p>
                <p class="card-text"><b>Цена:</b> {{ $product->price }}</p>
                <button class="btn btn-warning" wire:click="addProduct({{ $product->id }})">Купить</button>
            </div>
        </div>
    @endforeach

    {{ $products->links() }}
</div>
