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
                    <h6 class="mb-0">Merk Mobil</h6>
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
                    <h6 class="mb-0">Mobil Siap Jual</h6>
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
                    <h4 class="lh-1 mb-1">XXX</h4>
                    <h6 class="mb-0">Mobil Terjual</h6>
                </div>
            </div>
            <!-- End Widget -->
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3 mb-md-4">
                <div class="card-header">
                    <h5 class="font-weight-semi-bold mb-0">History Pesanan Terbaru</h5>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Customer</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Phone</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Amount</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3">149531</td>
                                    <td class="py-3">
                                        <div>John Doe</div>
                                        <div class="text-muted">Acme Inc.</div>
                                    </td>
                                    <td class="py-3">(000) 111-1234</td>
                                    <td class="py-3">$1,230.00</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a id="dropDown16Invoker" class="link-dark d-flex" href="#"
                                                aria-controls="dropDown16" aria-haspopup="true" aria-expanded="false"
                                                data-unfold-target="#dropDown16" data-unfold-event="click"
                                                data-unfold-type="css-animation" data-unfold-duration="300"
                                                data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                <i class="gd-more-alt icon-text"></i>
                                            </a>

                                            <ul id="dropDown16"
                                                class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut"
                                                aria-labelledby="dropDown16Invoker"
                                                style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Edit</span>
                                                    </a>
                                                </li>
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-close unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">149531</td>
                                    <td class="py-3">
                                        <div>John Doe</div>
                                        <div class="text-muted">Acme Inc.</div>
                                    </td>
                                    <td class="py-3">(000) 111-1234</td>
                                    <td class="py-3">$1,230.00</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-success">Fulfilled</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a id="dropDown15Invoker" class="link-dark d-flex" href="#"
                                                aria-controls="dropDown15" aria-haspopup="true" aria-expanded="false"
                                                data-unfold-target="#dropDown15" data-unfold-event="click"
                                                data-unfold-type="css-animation" data-unfold-duration="300"
                                                data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                <i class="gd-more-alt icon-text"></i>
                                            </a>

                                            <ul id="dropDown15"
                                                class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut"
                                                aria-labelledby="dropDown15Invoker"
                                                style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Edit</span>
                                                    </a>
                                                </li>
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-close unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">149531</td>
                                    <td class="py-3">
                                        <div>John Doe</div>
                                        <div class="text-muted">Acme Inc.</div>
                                    </td>
                                    <td class="py-3">(000) 111-1234</td>
                                    <td class="py-3">$1,230.00</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a id="dropDown14Invoker" class="link-dark d-flex" href="#"
                                                aria-controls="dropDown14" aria-haspopup="true" aria-expanded="false"
                                                data-unfold-target="#dropDown14" data-unfold-event="click"
                                                data-unfold-type="css-animation" data-unfold-duration="300"
                                                data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                <i class="gd-more-alt icon-text"></i>
                                            </a>

                                            <ul id="dropDown14"
                                                class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut"
                                                aria-labelledby="dropDown14Invoker"
                                                style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Edit</span>
                                                    </a>
                                                </li>
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-close unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">149531</td>
                                    <td class="py-3">
                                        <div>John Doe</div>
                                        <div class="text-muted">Acme Inc.</div>
                                    </td>
                                    <td class="py-3">(000) 111-1234</td>
                                    <td class="py-3">$1,230.00</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-danger">Cancelled</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a id="dropDown13Invoker" class="link-dark d-flex" href="#"
                                                aria-controls="dropDown13" aria-haspopup="true" aria-expanded="false"
                                                data-unfold-target="#dropDown13" data-unfold-event="click"
                                                data-unfold-type="css-animation" data-unfold-duration="300"
                                                data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                <i class="gd-more-alt icon-text"></i>
                                            </a>

                                            <ul id="dropDown13"
                                                class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut"
                                                aria-labelledby="dropDown13Invoker"
                                                style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Edit</span>
                                                    </a>
                                                </li>
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-close unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">149531</td>
                                    <td class="py-3">
                                        <div>John Doe</div>
                                        <div class="text-muted">Acme Inc.</div>
                                    </td>
                                    <td class="py-3">(000) 111-1234</td>
                                    <td class="py-3">$1,230.00</td>
                                    <td class="py-3">
                                        <span class="badge badge-pill badge-success">Fulfilled</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="position-relative">
                                            <a id="dropDown12Invoker" class="link-dark d-flex" href="#"
                                                aria-controls="dropDown12" aria-haspopup="true" aria-expanded="false"
                                                data-unfold-target="#dropDown12" data-unfold-event="click"
                                                data-unfold-type="css-animation" data-unfold-duration="300"
                                                data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                <i class="gd-more-alt icon-text"></i>
                                            </a>

                                            <ul id="dropDown12"
                                                class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut"
                                                aria-labelledby="dropDown12Invoker"
                                                style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Edit</span>
                                                    </a>
                                                </li>
                                                <li class="unfold-item">
                                                    <a class="unfold-link media align-items-center text-nowrap"
                                                        href="#">
                                                        <i class="gd-close unfold-item-icon mr-3"></i>
                                                        <span class="media-body">Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
