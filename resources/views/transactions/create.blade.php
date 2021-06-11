@extends('layouts.master_customer')

@section('content')
<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Form Pembelian</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <h2>{{ $car->nama }}</h2>
                        <p>Rp {{ number_format($car->harga, 0, ',', '.') }}</p>
                    </div>
                    <ul>
                        <li><span>Merk:</span> {{ $car->brand->nama }}</li>
                        <li><span>Tahun:</span> {{ $car->tahun }}</li>
                        <li><span>Transmisi:</span> {{ $car->transmisi }}</li>
                        <li><span>Mesin:</span> {{ $car->isi_silinder }} cc</li>
                        <li><span>Kapasitas:</span> {{ $car->kapasitas }} orang</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="no_ktp">No. KTP</label>
                                <input type="text" name="no_ktp" id="no_ktp">
                            </div>
                            <div class="col-lg-6">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                        </div>
                        <textarea placeholder="Alamat" name="alamat"></textarea>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="no_hp">No. Telp</label>
                                <input type="text" name="no_hp" id="no_hp">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                <select name="jenis_pembayaran" id="jenis_pembayaran">
                                    <option value="Tunai">Tunai</option>
                                    <option value="Transfer">Transfer</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="tanggal_pengiriman">Target Tanggal Pengiriman</label>
                                <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman">
                            </div>
                        </div>
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <button type="submit" class="site-btn">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
