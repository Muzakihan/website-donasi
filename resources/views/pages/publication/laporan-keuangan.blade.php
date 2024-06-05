@extends('layouts.home')

@section('title')
    Laporan Keuangan | Donation
@endsection

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Laporan Keuangan
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Publikasi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Laporan Keuangan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Laporan Keuangan</div>
                <h1 class="display-6 mb-5">Laporan Keuangan Yayasan Kami</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp rounded" data-wow-delay="0.1s" style="width: 400px;">
                    <div class="service-item bg-white text-left w-full h-100  p-4 p-xl-5">
                        <div class="image">
                            <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        </div>
                        <div class="content-teks">
                            <h2 class="mb-3 display-6 text-primary">2022</h2>
                            <p class="mb-4">Laporan Keuangan dan Auditor Independen 2022</p>
                        </div>
                        <button class="btn btn-primary px-5" style="height: 60px;">
                            Unduh Sekarang
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa-solid fa-download"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp rounded" data-wow-delay="0.1s" style="width: 400px;">
                    <div class="service-item bg-white text-left w-full h-100  p-4 p-xl-5">
                        <div class="image">
                            <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        </div>
                        <div class="content-teks">
                            <h2 class="mb-3 display-6 text-primary">2021</h2>
                            <p class="mb-4">Laporan Keuangan dan Auditor Independen 2021</p>
                        </div>
                        <button class="btn btn-primary px-5" style="height: 60px;">
                            Unduh Sekarang
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa-solid fa-download"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp rounded" data-wow-delay="0.1s" style="width: 400px;">
                    <div class="service-item bg-white text-left w-full h-100  p-4 p-xl-5">
                        <div class="image">
                            <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        </div>
                        <div class="content-teks">
                            <h2 class="mb-3 display-6 text-primary">2020</h2>
                            <p class="mb-4">Laporan Keuangan dan Auditor Independen 2020</p>
                        </div>
                        <button class="btn btn-primary px-5" style="height: 60px;">
                            Unduh Sekarang
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa-solid fa-download"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
