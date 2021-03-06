@extends('layouts.layout')
@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">

            <div class="wrapper create-pizza">
                <h1>Create a New Pizza</h1>
                <form action="/pizzas" method="POST">
                    @csrf
                    <label for="name">Your name:</label>
                    <input type="text" name="name" id="name" required>
                    <label for="type">Choose type of pizza:</label>
                    <select name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg supreme">Veg Supreme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                    <label for="base">Choose crust:</label>
                    <select name="base" id="base">
                        <option value="thick">Thick</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="cheese crust">Cheese Crust</option>
                        <option value="garlic crust">Garlic Crust</option>
                    </select>
                    <fieldset>
                        <label>Extra Toppings:</label><br />
                        <input type="checkbox" name="toppings[]" value="mushrooms">mushrooms<br />
                        <input type="checkbox" name="toppings[]" value="katchap">katchap<br />
                        <input type="checkbox" name="toppings[]" value="olives">olives<br />

                    </fieldset>
                    <input type="submit" value="Order Pizza">
                </form>
            </div>


        </div>
    </div>
@endsection
