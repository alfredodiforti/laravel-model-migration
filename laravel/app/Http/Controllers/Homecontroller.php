<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class Homecontroller extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('home', compact('cars'));
    }
}
