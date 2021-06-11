@extends('layouts.master_customer')

@section('content')
<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{ $car->nama }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

<!-- Car Details Section Begin -->
<section class="car-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="car__details__pic">
                    <div class="car__details__pic__large">
                        <img class="car-big-img" src="{{ asset('storage/' . $car->image) }}" alt="" style="width: 848px; height: 503px">
                    </div>
                </div>
                <div class="car__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Dimensi & Performa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Spesifikasi Lain</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="car__details__tab__info__item">
                                            <h5>{{ $car->nama }}</h5>
                                            <p>{{ $car->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>Dimensi</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Panjang : {{ $car->panjang }} mm</li>
                                                <li><i class="fa fa-check"></i> Lebar  : {{ $car->lebar }} mm</li>
                                                <li><i class="fa fa-check"></i> Tinggi  : {{ $car->tinggi }} mm</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>Performa</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Tenaga : {{ $car->tenaga }} rpm</li>
                                                <li><i class="fa fa-check"></i> Torsi  : {{ $car->torsi }} rpm</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>Spesifikasi Lainnya</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Tahun Keluaran : {{ $car->tahun }}</li>
                                                <li><i class="fa fa-check"></i> Status Mobil : {{ $car->status == 1 ? 'Baru' : 'Bekas' }}</li>
                                                <li><i class="fa fa-check"></i> Kapasitas  : {{ $car->kapasitas }} orang</li>
                                                <li><i class="fa fa-check"></i> Isi Silinder  : {{ $car->isi_silinder }} cc</li>
                                                <li><i class="fa fa-check"></i> Transmisi  : {{ $car->transmisi }}</li>
                                                <li><i class="fa fa-check"></i> Bahan Bakar  : {{ $car->bahan_bakar }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="car__details__sidebar">
                    <div class="car__details__sidebar__model">
                        <ul>
                            <li>Stock <span>K99D10459934</span></li>
                            <li>Vin <span>3VWKM245686</span></li>
                        </ul>
                    </div>
                    <div class="car__details__sidebar__payment">
                        <ul>
                            <li><span>Rp {{ number_format($car->harga, 0, ',', '.') }}</span></li>
                        </ul>
                        <a href="{{ route('transactions.create', $car->id) }}" class="primary-btn">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Details Section End -->
@endsection
