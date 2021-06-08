<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
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
            'deskripsi' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Brand::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'image' => $image_name,
        ]);

        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $brand = Brand::find($id);

        if ($request->file('image') == '') {
            $brand->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            if ($brand->image && file_exists(storage_path('app/public/' . $brand->image))) {
                \Storage::delete('public/' . $brand->image);
            }
            $image_name = $request->file('image')->store('images', 'public');

            $brand->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'image' => $image_name,
            ]);
        }

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->back();
    }
}
