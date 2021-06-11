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

    public function search(Request $request)
    {
        $brands = Brand::all();
        $cars = Car::where('nama', 'like', '%' . $request->keyword . '%')->get();
        return view('customers.index', compact('brands', 'cars'));
    }

    public function filter(Request $request)
    {
        $brands = Brand::all();

        $car = (new Car())->newQuery();

        if ($request->merk != '') {
            $car->where('brand_id', $request->merk);
        }

        if ($request->kondisi != '') {
            $car->where('status', $request->kondisi);
        }

        if ($request->transmisi != '') {
            $car->where('transmisi', $request->transmisi);
        }

        if ($request->kapasitas != '') {
            $car->where('kapasitas', $request->kapasitas);
        }
        $cars = $car->get();
        return view('customers.index', compact('brands', 'cars'));
    }
}
