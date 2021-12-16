@extends('layouts.layout')
@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="wrapper pizza-details">
                <h1>Order for {{ $pizza->name }}</h1>
                <p class="type">Type - {{ $pizza->type }}</p>
                <p class="base">Base - {{ $pizza->base }}</p>
                <p>Extra Toppings:</p>
                <ul>
                    @foreach ($pizza->toppings as $topping)
                        <li>{{ $topping }}</li>
                    @endforeach
                </ul>
            </div>
            <a href="" me></a>
            <form action="/pizzas/{{ $pizza->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Order</button>
            </form>
            <a href="/pizzas" class="back">
                <- Back to all pizzas</a>

        </div>
    </div>
@endsection
