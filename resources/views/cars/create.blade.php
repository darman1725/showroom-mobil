@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Tambah Dokter Baru</div>
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
                    <li class="breadcrumb-item active" aria-current="page">Tambah Dokter Baru</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Form Dokter Baru</div>
            </div>


            <!-- Form -->
            <div>
                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="nama">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="specialist">Specialist</label>
                            <input type="text" class="form-control" id="specialist" name="specialist">
                        </div>
                    </div>
                 
                    <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                            <label for="image">Foto</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="jadwal">Jadwal</label>
                            <input type="text" class="form-control" id="jadwal" name="jadwal">
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