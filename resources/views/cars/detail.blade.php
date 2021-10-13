@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Detail Dokter</div>
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
                        <a href="#">Data Dokter</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Dokter</li>
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
                        <dt class="col-sm-3">Nama Dokter</dt>
                        <dd class="col-sm-9">{{ $car->nama }}</dd>
                      
                        <dt class="col-sm-3">Specialist</dt>
                        <dd class="col-sm-9">{{ $car->specialist }}</dd>
                      
                        <dt class="col-sm-3">Jadwal</dt>
                        <dd class="col-sm-9">{{ $car->jadwal }}</dd>
                      </dl>
                </div>
            </div>
            <!-- End Cars -->
        </div>
    </div>
</div>
@endsection