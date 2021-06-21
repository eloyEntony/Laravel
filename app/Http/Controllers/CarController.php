<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function Index(Request $request)
    {
        $cars = Car::query()->get();
        //dd($cars[0]->CarImages);

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }
}
