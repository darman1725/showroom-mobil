@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Edit Mobil</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Mobil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edi Mobil</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Form Edit Mobil</div>
            </div>


            <!-- Form -->
            <div>
                <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="nama">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $car->nama }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="brand_id">Merk Mobil</label>
                            <select class="form-control" name="brand_id" id="brand_id">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $car->brand->id == $brand->id ? 'selected' : '' }}>{{ $brand->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-12">
                            <label for="deskripsi">Deskripsi Mobil</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="3">{{ $car->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="tahun">Tahun Keluaran</label>
                            <input type="year" class="form-control" id="tahun" name="tahun" value="{{ $car->tahun }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="1" {{ $car->status == 1 ? 'selected' : '' }}>Baru</option>
                                <option value="2" {{ $car->status == 2 ? 'selected' : '' }}>Bekas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="harga">Harga Jual</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $car->harga }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="image">Foto Mobil</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ $car->image }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="isi_silinder">Isi Silinder (cc)</label>
                            <input type="number" class="form-control" id="isi_silinder" name="isi_silinder" value="{{ $car->isi_silinder }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="transmisi">Transmisi</label>
                            <select class="form-control" id="transmisi" name="transmisi">
                                <option value="Manual" {{ $car->transmisi == 'Manual' ? 'selected' : '' }}>Manual</option>
                                <option value="Otomatis" {{ $car->transmisi == 'Otomatis' ? 'selected' : '' }}>Otomatis</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="tenaga">Tenaga (satuan rpm)</label>
                            <input type="number" class="form-control" id="tenaga" name="tenaga" value="{{ $car->tenaga }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="torsi">Torsi (satuan rpm)</label>
                            <input type="number" class="form-control" id="torsi" name="torsi" value="{{ $car->torsi }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="bahan_bakar">Bahan Bakar</label>
                            <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" value="{{ $car->bahan_bakar }}">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="kapasitas">Kapasitas (orang)</label>
                            <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="{{ $car->kapasitas }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-4">
                            <label for="panjang">Panjang (satuan mm)</label>
                            <input type="number" class="form-control" id="panjang" name="panjang" value="{{ $car->panjang }}">
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="lebar">Lebar (satuan mm)</label>
                            <input type="number" class="form-control" id="lebar" name="lebar" value="{{ $car->lebar }}">
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="tinggi">Tinggi (satuan mm)</label>
                            <input type="number" class="form-control" id="tinggi" name="tinggi" value="{{ $car->tinggi }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
            <!-- End Form -->
        </div>
    </div>
</div>
@endsection