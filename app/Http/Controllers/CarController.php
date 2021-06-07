<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'merk' => 'required',
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

        Car::create([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'image' => $image_name,
            'status' => $request->status,
            'isi_silinder' => $request->isi_silinder,
            'transmisi' => $request->transmisi,
            'tenaga' => $request->tenaga,
            'torsi' => $request->torsi,
            'bahan_bakar' => $request->bahan_bakar,
            'kapasitas' => $request->kapasitas,
            'panjang' => $request->panjang,
            'tinggi' => $request->tinggi,
            'lebar' => $request->lebar,
        ]);

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
        $car = Car::find($id);
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
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
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
            'merk' => 'required',
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

        $car = Car::find($id);

        if ($request->file('image') == '') {
            $car->update([
                'nama' => $request->nama,
                'merk' => $request->merk,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                'status' => $request->status,
                'isi_silinder' => $request->isi_silinder,
                'transmisi' => $request->transmisi,
                'tenaga' => $request->tenaga,
                'torsi' => $request->torsi,
                'bahan_bakar' => $request->bahan_bakar,
                'kapasitas' => $request->kapasitas,
                'panjang' => $request->panjang,
                'tinggi' => $request->tinggi,
                'lebar' => $request->lebar,
            ]);
        } else {
            if ($car->image && file_exists(storage_path('app/public/' . $car->image))) {
                \Storage::delete('public/' . $car->image);
            }
            $image_name = $request->file('image')->store('images', 'public');

            $car->update([
                'nama' => $request->nama,
                'merk' => $request->merk,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                'image' => $image_name,
                'status' => $request->status,
                'isi_silinder' => $request->isi_silinder,
                'transmisi' => $request->transmisi,
                'tenaga' => $request->tenaga,
                'torsi' => $request->torsi,
                'bahan_bakar' => $request->bahan_bakar,
                'kapasitas' => $request->kapasitas,
                'panjang' => $request->panjang,
                'tinggi' => $request->tinggi,
                'lebar' => $request->lebar,
            ]);
        }

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
