@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Detail Pesanan</div>
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
                    <li class="breadcrumb-item">
                        <a href="#">Data Pesanan</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                <strong>Perusahaan:</strong><br>
                                    Grain Showroom<br>
                                    Jalanin Aja Dulu, Siapa Tau Jodoh<br>
                                    (+62) 858 8224 5529
                                </address>
                            </div>
                            <div class="col-lg-6 text-right">
                                <address>
                                <strong>Customer:</strong><br>
                                    {{ $transaction->customer->nama }}<br>
                                    {{ $transaction->customer->alamat }}<br>
                                    {{ $transaction->customer->no_hp }}
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>Metode Pembayaran:</strong><br>
                                    {{ $transaction->jenis_pembayaran }}<br>
                                </address>
                            </div>
                            <div class="col-lg-6 text-right">
                                <address>
                                    <strong>Tanggal Pemesanan:</strong><br>
                                    {{ date("d F Y", strtotime($transaction->tanggal_pemesanan)) }}<br>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>Status Pesanan:</strong><br>
                                    {{ $transaction->status }}<br>
                                </address>
                            </div>
                            <div class="col-lg-6 text-right">
                                <address>
                                    <strong>Tanggal Pengiriman:</strong><br>
                                    {{ date("d F Y", strtotime($transaction->tanggal_pengiriman)) }}<br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Detail Pesanan</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td><strong>Nama Mobil</strong></td>
                                                <td class="text-center"><strong>Harga</strong></td>
                                                <td class="text-center"><strong>Jumlah</strong></td>
                                                <td class="text-right"><strong>Total</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $transaction->car->nama . ' ' . $transaction->car->tahun }}</td>
                                                <td class="text-center">Rp {{ number_format($transaction->car->harga, 0, ',', '.') }}</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">Rp {{ number_format($transaction->car->harga, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                <td class="no-line text-right">Rp {{ number_format($transaction->car->harga, 0, ',', '.') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            @if ($transaction->status == 'Pending')
                <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Pesanan Selesai & Cetak Nota</button>
                    <a href="{{ route('transactions.order') }}" class="btn btn-secondary">Kembali</a>
                </form>
            @else
                <a href="{{ route('transactions.nota', $transaction->id) }}" class="btn btn-success">Cetak Nota</a>
                <a href="{{ route('transactions.history') }}" class="btn btn-secondary">Kembali</a>
            @endif
        </div>
    </div>
</div>
@endsection