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
        /*
        foreach ($cars as $car) {
            $title = $car->title;
            $producer = $car->producer;
            $number_of_doors = $car->number_of_doors;
        return view('cars', compact('title', 'producer', 'number_of_doors'));
        }
       
     */
    }
}
