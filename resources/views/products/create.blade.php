@extends('layouts.inner')

@section('title', 'Create')

@section('content')

    <form method="post" action="/products">
        @csrf
        <p>
            <label>Наименование продукта</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label>Бренд</label><br>
            <input type="text" name="brand" value="{{ old('brand') }}">
        </p>
        <p>
            <label>Модель</label><br>
            <input type="text" name="model" value="{{ old('model') }}">
        </p>
        <p>
            <label>Тип</label><br>
            <select name="type_id">
                @foreach($productTypes as $productType)
                    <option value="{{ $productType->id }}">{{ $productType->type }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Цена</label><br>
            <input type="text" name="price" value="{{ old('price') }}">
        </p>
        <button type="submit">Сохранить</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
