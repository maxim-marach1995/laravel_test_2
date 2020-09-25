@extends('admin.layouts.app')

@section('title', 'Create')

@section('content')

    <form method="post" action="{{ route('products.update', $product) }}" class="mb-5 mt-3">

        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Сортировка</label><br>
            <input class="form-control" type="text" name="sort" value="{{ old('sort') ?? $product->sort }}" required>
            @error('sort') {{ $message }} @enderror
        </div>
        <div class="form-group">
            <label>Наименование продукта</label><br>
            <input class="form-control" type="text" name="name" value="{{ old('name') ?? $product->name }}" required>
            @error('name') {{ $message }} @enderror

        </div>
        <div class="form-group">
            <label>Бренд</label><br>
            <input class="form-control" type="text" name="brand" value="{{ old('brand') ?? $product->brand }}" required>
            @error('brand') {{ $message }} @enderror

        </div>
        <div class="form-group">
            <label>Модель</label><br>
            <input class="form-control" type="text" name="model" value="{{ old('model') ?? $product->model }}" required>
            @error('model') {{ $message }} @enderror
        </div>
        <p>
            <label>Тип</label><br>
            <select name="type_id" class="form-control">
                @foreach($productTypes as $productType)
                    <option value="{{ $productType->id }}"
                        @if($productType->id == $product->type_id)
                            selected
                        @endif
                        >{{ $productType->type }}</option>
                @endforeach
            </select>
        </p>
        <div class="form-group">
            <label>Цена</label><br>
            <input class="form-control" type="text" name="price" value="{{ old('price') ?? $product->price }}">
            @error('price') {{ $message }} @enderror
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>

@endsection
