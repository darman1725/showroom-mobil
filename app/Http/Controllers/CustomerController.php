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
        $cars = Car::paginate(9);
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
        $keyword = $request->keyword;
        $cars = Car::where('nama', 'like', '%' . $keyword . '%')->paginate(9);
        $cars->appends(['keyword' => $keyword]);
        return view('customers.index', compact('brands', 'cars'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $cars = $car->paginate(9);
        $cars->appends(['brand_id' => $request->merk, 'status' => $request->kondisi, 'transmisi' => $request->transmisi, 'kapasitas' => $request->kapasitas]);
        return view('customers.index', compact('brands', 'cars'));
    }
}
