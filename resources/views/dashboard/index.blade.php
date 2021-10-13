@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">

    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Dashboard</div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
            <!-- Widget -->
            <div class="card flex-row align-items-center p-3 p-md-4">
                <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                    <i class="gd-tag icon-text d-inline-block text-primary"></i>
                </div>
                <div>
                    <h4 class="lh-1 mb-1">{{ $brand }}</h4>
                    <h6 class="mb-0">Data Treatment</h6>
                </div>
            </div>
            <!-- End Widget -->
        </div>

        <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
            <!-- Widget -->
            <div class="card flex-row align-items-center p-3 p-md-4">
                <div class="icon icon-lg bg-soft-secondary rounded-circle mr-3">
                    <i class="gd-car icon-text d-inline-block text-secondary"></i>
                </div>
                <div>
                    <h4 class="lh-1 mb-1">{{ $car }}</h4>
                    <h6 class="mb-0">Treatment - Siap Guna</h6>
                </div>
            </div>
            <!-- End Widget -->
        </div>

        <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
            <!-- Widget -->
            <div class="card flex-row align-items-center p-3 p-md-4">
                <div class="icon icon-lg bg-soft-warning rounded-circle mr-3">
                    <i class="gd-stats-up icon-text d-inline-block text-warning"></i>
                </div>
                <div>
                    <h4 class="lh-1 mb-1">{{ $transaction }}</h4>
                    <h6 class="mb-0">Treatment - Selesai</h6>
                </div>
            </div>
            <!-- End Widget -->
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3 mb-md-4">
                <div class="card-header">
                    <h5 class="font-weight-semi-bold mb-0">Riwayat Transaksi Terbaru</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Pembeli</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">No. Telp.</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Total</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $item)
                                    <tr>
                                        <td class="py-3">{{ $item->no_nota }}</td>
                                        <td class="py-3">
                                            <div>{{ $item->customer->nama }}</div>
                                            <div class="text-muted">{{ $item->customer->alamat }}</div>
                                        </td>
                                        <td class="py-3">{{ $item->customer->no_hp }}</td>
                                        <td class="py-3">Rp {{ number_format($item->car->harga, 0, ',', '.') }}</td>
                                        <td class="py-3">
                                            <span class="badge badge-pill {{ $item->status == 'Pending' ? 'badge-warning' : 'badge-success' }}">{{ $item->status }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
