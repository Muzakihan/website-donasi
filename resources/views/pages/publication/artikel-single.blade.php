@extends('layouts.home')

@section('title')
    Publikasi | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Publikasi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">sin</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class=" header-single-post container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s">
                <img class="logo h-auto" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="" style="width: 100%;">
            </div>

            <div class="d-flex">
                <div class="social-media-blog d-flex flex-column gap-2 m-5 align-items-center">
                    <p>Social</p>
                    <a class="btn  py-2 px-3" href="">
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                    </a>
                    <a class="btn  py-2 px-3" href="">
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                    </a>
                    <a class="btn  py-2 px-3" href="">
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                    </a>
                </div>
                <div class="header-media-blog">
                    <h1>Penanaman 1000 Bibit Pohon di Pantai Karangmalang, Kendal</h1>
                    <p>Yayasan Anshor - 20/05/2024</p>
                    <div class="content-blog mt-5">
                        <p>
                            Pada 12 Mei 2024, Yayasan Pundi Amal Peduli Kasih (YPP) SCTV Indosiar bersama Yayasan Lindungi
                            Hutan
                            mengadakan kegiatan penanaman 1000 bibit pohon di pesisir Pantai Karangmalang, Kendal, Jawa
                            Tengah.
                            Kegiatan penanaman 1000 bibit pohon ini bertujuan untuk mengatasi abrasi di lingkungan sekitar
                            pesisir
                            pantai mengingat di sekitar pesisir Pantai Karangmalang banyak pemukiman masyarakat dan juga
                            bertujuan
                            untuk melakukan penghijauan lingkungan.

                            Penanaman kali ini dihadiri langsung oleh Ketua Umum YPP, Bapak Imam Sudjarwo. Beliau mengatakan
                            kegiatan penanaman dan penghijauan seperti ini sangat diperlukan oleh masyarakat Desa Pidodo
                            Kulon
                            untuk
                            menghindari abrasi.
                            selain itu, kegiatan ini dihadiri juga oleh tokoh masyarakat sekitar, mahasiswa, pemerhati
                            lingkungan
                            hingga pihak keamanan setempat terlihat sangat antusias saat melakukan penanaman 1000 bibit
                            pohon
                            cemara
                            laut di pesisir pantai Karang Malang.

                            Kegiatan penanaman 1000 bibit pohon ini diharapkan dapat mencegah masalah abrasi yang terjadi di
                            wilayah
                            pesisir Pantai Karangmalang ini.
                        </p>
                        <center>

                            <img class="logo h-auto" src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""
                                style="width: 45%;">
                        </center>
                        <br><br>
                        <p>
                            Pada 12 Mei 2024, Yayasan Pundi Amal Peduli Kasih (YPP) SCTV Indosiar bersama Yayasan Lindungi
                            Hutan
                            mengadakan kegiatan penanaman 1000 bibit pohon di pesisir Pantai Karangmalang, Kendal, Jawa
                            Tengah.
                            Kegiatan penanaman 1000 bibit pohon ini bertujuan untuk mengatasi abrasi di lingkungan sekitar
                            pesisir pantai mengingat di sekitar pesisir Pantai Karangmalang banyak pemukiman masyarakat dan
                            juga
                            bertujuan untuk melakukan penghijauan lingkungan.

                            Penanaman kali ini dihadiri langsung oleh Ketua Umum YPP, Bapak Imam Sudjarwo. Beliau mengatakan
                            kegiatan penanaman dan penghijauan seperti ini sangat diperlukan oleh masyarakat Desa Pidodo
                            Kulon
                            untuk menghindari abrasi.
                            selain itu, kegiatan ini dihadiri juga oleh tokoh masyarakat sekitar, mahasiswa, pemerhati
                            lingkungan hingga pihak keamanan setempat terlihat sangat antusias saat melakukan penanaman 1000
                            bibit pohon cemara laut di pesisir pantai Karang Malang.

                            Kegiatan penanaman 1000 bibit pohon ini diharapkan dapat mencegah masalah abrasi yang terjadi di
                            wilayah pesisir Pantai Karangmalang ini.
                        </p>
                    </div>
                </div>
            </div>

            <hr class="mt-2 mb-2">

            <h1 class="text-center text-black animated slideInDown mb-4 mt-4">Berita Lainnya</h1>
            <br>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Child Education</h4>
                        <div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3"><i
                                    class="fa-solid fa-calendar"></i> 20/05/2024</div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">Event</div>
                        </div>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>

                        <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Child Education</h4>
                        <div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3"><i
                                    class="fa-solid fa-calendar"></i> 20/05/2024</div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">Event</div>
                        </div>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>

                        <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Child Education</h4>
                        <div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3"><i
                                    class="fa-solid fa-calendar"></i> 20/05/2024</div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">Event</div>
                        </div>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>

                        <img class="img-fluid mb-4" src="assets/img/image-rekening-1.png" alt="">
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
