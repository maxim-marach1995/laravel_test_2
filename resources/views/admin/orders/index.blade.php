@extends('admin.layouts.app')

@section('title', 'Create')

@section('content')
    @forelse($orders as $order)
        <div class="card">
            <div class="card-body">
                <p class="card-text"><b>Покупатель:</b> {{ $order->user->name }}</p>
                <p class="card-text"><b>Наименование продукта:</b> {{ $order->product->name }}</p>
                <p class="card-text"><b>Бренд:</b> {{ $order->product->brand }}</p>
                <p class="card-text"><b>Модель:</b> {{ $order->product->model }}</p>
                <p class="card-text"><b>Тип продукта:</b></p>
                <p class="card-text"><b>Цена:</b> {{ $order->product->price }}</p>
                <p class="card-text"><b>Дата и время покупки:</b> {{ $order->created_at }}</p>
            </div>
        </div>
    @empty
        <h1>Нет элементов</h1>
    @endempty
@endsection
