<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        //return response(['message' => 'index']);
        //$cars = Car::query()->get();
        $cars = Car::query()->with("CarImages")->get();
        //dd($cars[0]->CarImages);
        return response(['cars' => $cars]);
    }

    public function store(Request $request)
    {
        $day = Car::create($request->validated());
        //return $day;
        return response(['message' => 'Car is add']);
    }

    public function show($id)
    {
        //$car = Car::where('id', $id)->first();
        $car = Car::findOrFail($id);
        return response(['car' => $car]);
    }


    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->fill($request->except(['id']));
        $car->save();
        return response()->json($car);
        //return response(['message' => 'update']);
    }


    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        if ($car->delete())
            return response(null, 204);
        //return response(['message' => 'destroy']);
    }
}
