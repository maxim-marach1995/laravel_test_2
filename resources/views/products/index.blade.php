@extends('layouts.inner')

@section('title', 'Create')

@section('content')

    <ul>
        @foreach($products as $product)
            <li>
                <p><b>Наименование продукта:</b> {{ $product->name }}</p>
                <p><b>Бренд:</b> {{ $product->brand }}</p>
                <p><b>Модель:</b> {{ $product->model }}</p>
                <p><b>Тип продукта:</b> {{ $product->product_type->type }}</p>
                <p><b>Цена:</b> {{ $product->price }}</p>
                <p>
                    <form action="{{ url("/products/$product->id") }}" method="post">
                        <input class="btn btn-default" type="submit" value="Delete" />
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </p>
                <p><a href="{{ url("/products/$product->id/edit") }}">Редактировать</a></p>
            </li><br>
        @endforeach
    </ul>

@endsection
