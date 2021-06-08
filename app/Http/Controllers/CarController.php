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
        $brands = Brand::all();
        return view('cars.create', compact('brands'));
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
            'brand_id' => 'required',
            'tahun' => 'required',
            'harga' => 'required|numeric',
            'image' => 'required',
            'status' => 'required',
            'isi_silinder' => 'required|numeric',
            'transmisi' => 'required',
            'tenaga' => 'required|numeric',
            'torsi' => 'required|numeric',
            'bahan_bakar' => 'required',
            'kapasitas' => 'required|numeric',
            'panjang' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'lebar' => 'required|numeric',
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        $car = new Car;
        $car->nama = $request->get('nama');
        $car->deskripsi = $request->get('deskripsi');
        $car->tahun = $request->get('tahun');
        $car->harga = $request->get('harga');
        $car->image = $image_name;
        $car->status = $request->get('status');
        $car->isi_silinder = $request->get('isi_silinder');
        $car->transmisi = $request->get('transmisi');
        $car->tenaga = $request->get('tenaga');
        $car->torsi = $request->get('torsi');
        $car->bahan_bakar = $request->get('bahan_bakar');
        $car->kapasitas = $request->get('kapasitas');
        $car->panjang = $request->get('panjang');
        $car->tinggi = $request->get('tinggi');
        $car->lebar = $request->get('lebar');

        $brand = new Brand;
        $brand->id = $request->get('brand_id');

        $car->brand()->associate($brand);
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
            'brand_id' => 'required',
            'tahun' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'isi_silinder' => 'required|numeric',
            'transmisi' => 'required',
            'tenaga' => 'required|numeric',
            'torsi' => 'required|numeric',
            'bahan_bakar' => 'required',
            'kapasitas' => 'required|numeric',
            'panjang' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'lebar' => 'required|numeric',
        ]);

        $car = Car::with('brand')->where('id', $id)->first();
        $car->nama = $request->get('nama');
        $car->deskripsi = $request->get('deskripsi');
        $car->tahun = $request->get('tahun');
        $car->harga = $request->get('harga');
        $car->status = $request->get('status');
        $car->isi_silinder = $request->get('isi_silinder');
        $car->transmisi = $request->get('transmisi');
        $car->tenaga = $request->get('tenaga');
        $car->torsi = $request->get('torsi');
        $car->bahan_bakar = $request->get('bahan_bakar');
        $car->kapasitas = $request->get('kapasitas');
        $car->panjang = $request->get('panjang');
        $car->tinggi = $request->get('tinggi');
        $car->lebar = $request->get('lebar');

        if ($request->file('image')) {
            if ($car->image && file_exists(storage_path('app/public/' . $car->image))) {
                \Storage::delete('public/' . $car->image);
            }
            $image_name = $request->file('image')->store('images', 'public');

            $car->image = $image_name;
        }

        $brand = new Brand;
        $brand->id = $request->get('brand_id');

        $car->brand()->associate($brand);
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
