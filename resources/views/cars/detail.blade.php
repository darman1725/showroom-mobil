@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Detail Mobil</div>
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
                    <li class="breadcrumb-item active" aria-current="page">Detail Mobil</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">{{ $car->nama }}</div>
            </div>


            <!-- Cars -->
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('storage/' . $car->image) }}" class="img-fluid">
                </div>
                <div class="col-12 col-md-8">
                    <dl class="row">
                        <dt class="col-sm-3">Merk</dt>
                        <dd class="col-sm-9">{{ $car->merk }}</dd>
                      
                        <dt class="col-sm-3">Deskripsi</dt>
                        <dd class="col-sm-9">{{ $car->deskripsi }}</dd>
                      
                        <dt class="col-sm-3">Tahun</dt>
                        <dd class="col-sm-9">{{ $car->tahun }}</dd>
                      
                        <dt class="col-sm-3">Harga</dt>
                        <dd class="col-sm-9">Rp {{ number_format($car->harga, 0, ',', '.') }}</dd>

                        <dt class="col-sm-3">Status</dt>
                        <dd class="col-sm-9">{{ $car->status == 1 ? 'Baru' : 'Bekas' }}</dd>

                        <dt class="col-sm-3">Isi Silinder</dt>
                        <dd class="col-sm-9">{{ $car->isi_silinder }} cc</dd>

                        <dt class="col-sm-3">Transmisi</dt>
                        <dd class="col-sm-9">{{ $car->transmisi }}</dd>

                        <dt class="col-sm-3">Tenaga</dt>
                        <dd class="col-sm-9">{{ $car->tenaga }} rpm</dd>

                        <dt class="col-sm-3">Torsi</dt>
                        <dd class="col-sm-9">{{ $car->torsi }} rpm</dd>

                        <dt class="col-sm-3">Bahan Bakar</dt>
                        <dd class="col-sm-9">{{ $car->bahan_bakar }}</dd>

                        <dt class="col-sm-3">Kapasitas</dt>
                        <dd class="col-sm-9">{{ $car->kapasitas }} orang</dd>

                        <dt class="col-sm-3">Dimensi</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-4">Panjang</dt>
                                <dd class="col-sm-8">{{ $car->panjang }} mm</dd>
                                <dt class="col-sm-4">Lebar</dt>
                                <dd class="col-sm-8">{{ $car->lebar }} mm</dd>
                                <dt class="col-sm-4">Tinggi</dt>
                                <dd class="col-sm-8">{{ $car->tinggi }} mm</dd>
                            </dl>
                        </dd>
                      </dl>
                </div>
            </div>
            <!-- End Cars -->
        </div>
    </div>
</div>
@endsection