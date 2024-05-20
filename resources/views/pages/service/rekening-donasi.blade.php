@extends('layouts.home')

@section('title')
    Rekening Donasi | Donation
@endsection

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Rekening Donasi
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Layanan</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Rekening Donasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Rekening Donasi</div>
                <h1 class="display-6 mb-5">Salurkan bantuan Anda melalui rekening kami</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp rounded" data-wow-delay="0.1s" style="width: 400px;">
                    <div class="service-item bg-white text-center w-full h-100  p-4 p-xl-5" >
                        <h3>Rekening Infak, Sedekah & Kemanusiaan</h3>
                        <div class="image">
                            <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        </div>
                        <div class="content-teks">
                            <h2 class="mb-3">711 410 4455</h2>
                            <p class="mb-4">a.n. Lazismu PCM Bantul</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp rounded" data-wow-delay="0.1s" style="width: 400px;">
                    <div class="service-item bg-white text-center w-full h-100  p-4 p-xl-5" >
                        <h3>Rekening Infak, Sedekah & Kemanusiaan</h3>
                        <div class="image">
                            <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        </div>
                        <div class="content-teks">
                            <h2 class="mb-3">711 410 4455</h2>
                            <p class="mb-4">a.n. Lazismu PCM Bantul</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp rounded" data-wow-delay="0.1s" style="width: 400px;">
                    <div class="service-item bg-white text-center w-full h-100  p-4 p-xl-5" >
                        <h3>Rekening Infak, Sedekah & Kemanusiaan</h3>
                        <div class="image">
                            <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        </div>
                        <div class="content-teks">
                            <h2 class="mb-3">711 410 4455</h2>
                            <p class="mb-4">a.n. Lazismu PCM Bantul</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container mt-5 mb-5 card-section-structure">
        <div class="card">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="assets/img/carousel-2.jpg" class="card-img rounded-10" alt="Sample Image"
                        style="width: 100%; height: auto;">
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-body justify-content-between">
                        <h3 class="card-title wow fadeInUp" data-wow-delay="0.5s">Siap untuk donasi​infaq sedekah zakat ?</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Temukan lebih lanjut tentang Struktur Organisasi
                            Yayasan Anshor Yatim & Dhuafa. Klik di sini
                            untuk melihat lebih lanjut.</p>
                        <a class="btn btn-primary py-2 px-3 me-3 wow fadeInUp" data-wow-delay="0.5s" href="#">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
