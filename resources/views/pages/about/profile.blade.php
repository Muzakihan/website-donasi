@extends('layouts.home')

@section('title')
    About | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="assets/img/about-1.jpg" alt=""
                            style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="assets/img/about-2.jpg"
                            alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">We Help People In Need Around The World</h1>

                        <p class="mb-5">
                            <span class="text-primary"> Yayasan Anshor Yatim Dhuafa ( AYD ) </span> adalah sebuah organisasi
                            nirlaba yang bergerak di bidang
                            pendidikan dan sosial. Yayasan ini didirikan pada tanggal 21 September 2023. <br> Sejak
                            disahkannya
                            Akta Yayasan Anshor Yatim & Dhuafa dengan SK.KEMENKUMHAM.NO.AHU-0015718.AH.01.04.Tahun 2023 di
                            Gunung Sindur, Bogor, Jawa Barat.
                        </p>
                        </a>
                        <div>
                            <a class="btn btn-outline-primary py-2 px-3" href="">
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </a>
                            <a class="btn btn-outline-primary py-2 px-3" href="">
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                                    <i class="fa-brands fa-twitter"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-5">
                            Yang melatar belakangi berdirinya Yayasan Anshor Yatim Dhuafa adalah adanya rasa keprihatinan
                            terhadap kondisi anak-anak yatim dan dhuafa di Indonesia dan dilingkungan sekitar yayasan lebih
                            khususnya yaitu Masih banyaknya anak-anak yatim dan dhuafa yang tidak mendapatkan pendidikan
                            yang
                            layak, layanan kesehatan yang baik dan Mereka juga sering mengalami kesulitan dalam memenuhi
                            kebutuhan hidup sehari-harinya, belum mampu mencapai kemandirian dalam menjalani kehidupannya.

                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-5">
                            Berdasarkan latar belakang tersebut, sekelompok orang yang peduli terhadap pendidikan dan
                            kesejahteraan anak-anak yatim dan dhuafa kemudian mendirikan Yayasan Anshor Yatim Dhuafa.
                            Yayasan ini bertujuan untuk memberikan pendidikan dan bantuan sosial kepada anak-anak yatim dan
                            dhuafa agar mereka dapat tumbuh dan berkembang menjadi generasi yang cerdas, sehat, mandiri, dan
                            berdaya saing menjadi pengukir prestasi.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Visi</div>
                <h1 class="display-6 mb-5">Visi Yayasan Kami</h1>
            </div>
            <div class="row g-4 justify-content-center py-2" style="max-width:800px; margin: 0 auto;">
                <div class="bg-light border-bottom border-5 border-primary rounded p-4">
                    <h4 class="text-dark mb-2 text-center">"Menjadi Lembaga terpercaya dalam menciptakan generasi anak yatim
                        dan dhu’afa mandiri yang berakhlaqul karimah"
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Misi</div>
                <h1 class="display-6 mb-5">Misi Yayasan Kami</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                        <h1>1</h1>
                        <h4 class="mb-3">Keberlanjutan & Profesionalisme</h4>
                        <p class="mb-4">Mewujudkan keberlanjutan organisasi melalui tata kelola yang baik, Amanah, adaptif
                            inovatif dan professional</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                        <h1>2</h1>
                        <h4 class="mb-3">Pendidikan berakhlak</h4>
                        <br>
                        <p class="mb-4">Menciptakan yatim dan dhuafa yang cerdas dan berakhlakul karimah melalui
                            Pendidikan berkarakter.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                        <h1>3</h1>
                        <h4 class="mb-3">Pemberdayaan Kemandirian</h4>
                        <p class="mb-4">Mewujudkan kemandirian yatim & dhuafa melalui pemberdayaan &socioprener yang
                            berkesinambungan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container mt-5 mb-5 card-section-structure">
        <div class="card">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="assets/img/carousel-2.jpg" class="card-img rounded-10" alt="Sample Image"
                        style="width: 100%; height: auto;">
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-body justify-content-between">
                        <h3 class="card-title wow fadeInUp" data-wow-delay="0.5s">STRUKTUR ORGANISASI YAYASAN ANSHOR YATIM &
                            DHUAFA</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Temukan lebih lanjut tentang Struktur Organisasi
                            Yayasan Anshor Yatim & Dhuafa. Klik di sini
                            untuk melihat lebih lanjut.</p>
                        <a class="btn btn-primary py-2 px-3 me-3 wow fadeInUp" data-wow-delay="0.5s"
                            href="{{ route('structure') }}">
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
@endsection
