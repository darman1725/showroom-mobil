<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Car;

class DashboardController extends Controller
{
    public function index()
    {
        $brand = Brand::count();
        $car = Car::count();
        return view('dashboard.index', compact('brand', 'car'));
    }
}
