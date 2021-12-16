<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    //
    public function index()
    {
        // $pizzas = [
        //     ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //     ['type' => 'volcano', 'base' => 'garlic crust'],
        //     ['type' => 'veg supreme', 'base' => 'thin & crispy']
        // ];

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        $name = request('name');

        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => $name,
        ]);
    }

    public function details($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.details', [
            'pizza' => $pizza,
        ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {

        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        //error_log(request('toppings'));


        $pizza->save();
        return redirect('/')->with('msg', 'Successfuly Saved :)');
    }


    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas')->with('msg', 'Deleted!');
    }
}
