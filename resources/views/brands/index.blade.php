@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Data Layanan Treatment</div>
    </div>

    <div class="card mb-3 mb-md-4">
        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="No">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Treatment</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <a href="{{ route('brands.create') }}" class="btn btn-primary btn-sm"><i class="gd-plus"></i> Tambah Treatment Baru</a>
            </div>


            <!-- Cars -->
            <div class="table-responsive-xl">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">No</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Nama</th>
                            <th class="font-weight-semi-bold border-top-0 py-2" style="width: 500px">Deskripsi</th>
                            <th class="font-weight-semi-bold border-top-0 py-2 text-center">Gambar</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Biaya</th>
                            <th class="font-weight-semi-bold border-top-0 py-2 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td class="py-3">{{ $loop->iteration }}</td>
                                <td class="py-3">{{ $brand->nama }}</td>
                                <td class="py-3">{{ $brand->deskripsi }}</td>
                                <td class="py-3 text-center"><img src="{{ asset('storage/' . $brand->image) }}" style="height: 100px"></td>
                                <td class="py-3">{{ $brand->biaya }}</td>
                                <td class="py-3 text-center">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="{{ route('brands.edit', $brand->id) }}">
                                            <i class="gd-pencil icon-text"></i>
                                        </a>

                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="d-inline">
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