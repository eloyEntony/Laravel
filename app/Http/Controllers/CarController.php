<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function Index(Request $request)
    {
        $cars = Car::query()->get();
        //dd($cars[0]->CarImages);

        return view('cars.index', compact('cars'));
    }

    public function Create(Request $request)
    {
        return view('cars.create');
    }

    public function Store(Request $request)
    {
        //data
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = Car::create($request->all());


        //foto

        $files = $request->file('images');

        if($request->hasFile('images'))
        {
            foreach ($files as $file) {
                //$file
//                $file->store('images\\'.uniqid().$file);
                $fileName = 'profile-'.uniqid().'.'.$file->getClientOriginalExtension();

                // Save the file
                $path = $file->storeAs('public\files', $fileName);
                //dd($path);


                $data_to_image_table = ([
                    'name'=> $fileName,
                    'id_car'=> $data->id
                ]);
                CarImage::create($data_to_image_table);

            }
        }
        //dd($request);


        //return view("cars.create");
        return redirect()->route('cars.index')
            ->with('success', 'Car add successfully.');
    }
}
