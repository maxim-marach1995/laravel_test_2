@extends('admin.layouts.app')

@section('title', 'Create')

@section('content')

    <form method="post" action="{{ route('products.store') }}" class="mb-5 mt-3">
        @csrf
        <div class="form-group">
            <label>Сортировка</label><br>
            <input class="form-control" type="text" name="sort" value="{{ old('sort') ?? 1 }}" required>
        </div>
        <div class="form-group">
            <label>Наименование продукта</label><br>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
            @error('sort') {{ $message }} @enderror
        </div>
        <div class="form-group">
            <label>Бренд</label><br>
            <input class="form-control" type="text" name="brand" value="{{ old('brand') }}" required>
            @error('brand') {{ $message }} @enderror
        </div>
        <div class="form-group">
            <label>Модель</label><br>
            <input class="form-control" type="text" name="model" value="{{ old('model') }}" required>
            @error('model') {{ $message }} @enderror
        </div>
        <div class="form-group">
            <label>Тип</label><br>
            <select name="type_id" class="form-control">
                @foreach($productTypes as $productType)
                    <option value="{{ $productType->id }}">{{ $productType->type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Цена</label><br>
            <input class="form-control" type="text" name="price" value="{{ old('price') }}">
            @error('price') {{ $message }} @enderror
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>

@endsection
