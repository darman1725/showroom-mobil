<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('brand')->get();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        return view('cars.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'specialist' => 'required',
            'image' => 'required',
            'jadwal' => 'required',
          
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        $car = new Car;
        $car->nama = $request->get('nama');
        $car->specialist = $request->get('specialist');
        $car->image = $request->get('image');
        $car->jadwal = $request->get('jadwal');
       
       /* $brand = new Brand;
        $brand->id = $request->get('brand_id'); 

        $car->brand()->associate($brand); */
        $car->save(); 

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::with('brand')->where('id', $id)->first();
        return view('cars.detail', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::with('brand')->where('id', $id)->first();
        $brands = Brand::all();
        return view('cars.edit', compact('car', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'specialist' => 'required',
            'image' => 'required',
            'jadwal' => 'required',
        ]);

        $car = Car::with('brand')->where('id', $id)->first();
        $car->nama = $request->get('nama');
        $car->specialist = $request->get('specialist');
        $car->image = $request->get('image');
        $car->jadwal = $request->get('jadwal');

        if ($request->file('image')) {
            if ($car->image && file_exists(storage_path('app/public/' . $car->image))) {
                \Storage::delete('public/' . $car->image);
            }
            $image_name = $request->file('image')->store('images', 'public');

            $car->image = $image_name;
        }

       /* $brand = new Brand;
        $brand->id = $request->get('brand_id'); 

        $car->brand()->associate($brand); */
        $car->save();

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->back();
    }
}
