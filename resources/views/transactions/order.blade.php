@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Data Pesanan</div>
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
                        <a href="#">Transaksi</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pesanan</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <!-- Cars -->
            <div class="table-responsive-xl">
                <table class="table text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Nama Customer</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Nama Mobil</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">No. HP</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Tanggal Order</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td class="py-3">{{ $loop->iteration }}</td>
                                <td class="py-3">{{ $transaction->customer->nama }}</td>
                                <td class="py-3">{{ $transaction->car->nama }}</td>
                                <td class="py-3">{{ $transaction->customer->no_hp }}</td>
                                <td class="py-3">{{ $transaction->tanggal_pemesanan }}</td>
                                <td class="py-3">
                                    <div class="position-relative">
                                        <a class="link-dark d-inline-block" href="{{ route('transactions.show', $transaction->id) }}">
                                            <i class="gd-eye icon-text"></i>
                                        </a>
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