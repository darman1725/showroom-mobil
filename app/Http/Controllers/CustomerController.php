<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Car;

class CustomerController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $cars = Car::all();
        return view('customers.index', compact('brands', 'cars'));
    }

    public function show($id)
    {
        $car = Car::with('brand')->where('id', $id)->first();
        return view('customers.detail', compact('car'));
    }
}
