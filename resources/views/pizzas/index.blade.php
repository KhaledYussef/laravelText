@extends('layouts.layout')
@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="/img/pizza-house.png" alt="">
            <div class="title m-b-md">
                Pizza List
            </div>

            <h1>{{ $name }}</h1>
            {{-- @if ($price > 15)
                  <p>this pizza is expensive</p>
                @elseif($price < 5)
                  <p>this pizza is cheap</p>
                @else
                  <p>this pizza is normally priced</p>
                @endif

                @unless($base == 'cheesy crust')
                  <p>You don't have a cheesy crust</p>
                @endunless --}}

            {{-- @php
                  $name = 'khal';
                  echo($name);
                @endphp --}}

            {{-- @for ($i = 0; $i < 5; $i++)
                <div> the value of I is {{$i}}</div>
                @endfor --}}


            @foreach ($pizzas as $pizza)
                <div>
                    {{ $pizza->name }}
                </div>
            @endforeach

        </div>
    </div>
@endsection
