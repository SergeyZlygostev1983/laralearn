<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsCatalog extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|min:2|max:25',
            'model' => 'required|min:2|max:25',
            'price' => 'required|numeric|regex:/^[1-9]+[0-9]*000$/',
        ]);

        $car = Cars::create($validated);
        return redirect("/cars/{$car->id}");
    }

    public function show($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.show', ['car' => $car]);
    }

    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.edit', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $car = Cars::findOrFail($id);
        $car->brand = isset($request->brand) ? $request->brand : $car->brand;
        $car->model = isset($request->model) ? $request->model : $car->model;
        $car->price = isset($request->price) ? $request->price : $car->price;
        $car->save();
        return redirect()->route('cars.show', [ $car->id ]);
    }

    public function destroy($id)
    {
        Cars::destroy($id);
        return redirect()->route('cars.index');
    }
}
