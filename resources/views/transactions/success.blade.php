@extends('layouts.master_customer')

@section('content')
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <h2>Pemesanan berhasil dilakukan</h2>
                        <p>Silahkan download bukti pemesanan pada link berikut:</p>
                        <a href="{{ route('transactions.bukti', $id) }}" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
