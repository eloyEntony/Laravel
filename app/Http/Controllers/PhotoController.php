<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function Index(Request $request)
    {
        //$cars = Car::query()->get();
        //dd($cars[0]->CarImages);

        //return view('photos.index',compact('cars'));
        return view('photos.index');
    }
}
