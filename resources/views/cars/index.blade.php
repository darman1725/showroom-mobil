@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Data Mobil</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Mobil</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <a href="{{ route('cars.create') }}" class="btn btn-primary btn-sm"><i class="gd-plus"></i> Tambah Mobil Baru</a>
            </div>


            <!-- Cars -->
            <div class="table-responsive-xl">
                <table class="table text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Nama Mobil</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Merk</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Transmisi</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Bahan Bakar</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Mesin</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Kapasitas</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td class="py-3">{{ $loop->iteration }}</td>
                                <td class="py-3">{{ $car->nama }}</td>
                                <td class="py-3">{{ $car->merk }}</td>
                                <td class="py-3">{{ $car->transmisi }}</td>
                                <td class="py-3">{{ $car->bahan_bakar }}</td>
                                <td class="py-3">{{ $car->isi_silinder }} cc</td>
                                <td class="py-3">{{ $car->kapasitas }} orang</td>
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="{{ route('cars.show', $car->id) }}">
                                            <i class="gd-eye icon-text"></i>
                                        </a>
                                        <a class="link-dark d-inline-block" href="{{ route('cars.edit', $car->id) }}">
                                            <i class="gd-pencil icon-text"></i>
                                        </a>

                                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="d-inline">
                                           @csrf
                                           @method('DELETE')
                                           <button class="link-dark d-inline-block" type="submit" style="border: none; outline: none; background: none; padding: 0">
                                                <i class="gd-trash icon-text"></i>
                                            </button>
                                       </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Cars -->
        </div>
    </div>
</div>
@endsection