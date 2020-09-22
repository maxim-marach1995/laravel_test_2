@extends('layouts.inner')

@section('title', 'Create')

@section('content')

    <form method="post" action="/products/{{ $product->id }}">

        <input type="hidden" name="_method" value="patch" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <p>
            <label>Наименование продукта</label><br>
            <input type="text" name="name" value="{{ $product->name }}">
        </p>
        <p>
            <label>Бренд</label><br>
            <input type="text" name="brand" value="{{ $product->brand }}">
        </p>
        <p>
            <label>Модель</label><br>
            <input type="text" name="model" value="{{ $product->model }}">
        </p>
        <p>
            <label>Тип</label><br>
            <select name="type_id">
                @foreach($productTypes as $productType)
                    <option value="{{ $productType->id }}"
                        @if($productType->id == $product->type_id)
                            selected
                        @endif
                        >{{ $productType->type }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Цена</label><br>
            <input type="text" name="price" value="{{ $product->price }}">
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
