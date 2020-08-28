<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        
        $cars =Car::all();

        return view('cars', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::find($id);
        if (!$car) {
           echo 'page not found';
        }
        $title = $car->title;
        $producer = $car->producer;
        $number_of_doors = $car->number_of_doors;
        return view('car', compact('title', 'producer', 'number_of_doors'));
    }
}
