@extends('layouts.home')

@section('title')
    Jemput Zakat | Donation
@endsection

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Jemput Zakat</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Layanan</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Jemput Zakat</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="assets/img/carousel-2.jpg">
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Jemput Zakat
                            </div>
                            <h1 class="display-6 text-white mb-5">Kemudahan Anda dalam menunaikan zakat</h1>
                            <p class="text-white-50 mb-0">
                                Silakan hubungi Layanan Jemput Donasi ICG atau Indonesia Beramal ID melalui WhatsApp Center
                                kami.
                                Klik tombol di bawah dan Mohon informasikan nama dan alamat lengkap penjemputan donasi Anda
                            </p>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 bg-white p-5 rounded">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="" class="btn-whatsapp-pulse">

        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="modal-text">
        Chat with us on WhatsApp!
    </div>
    <!-- Team End -->
@endsection
