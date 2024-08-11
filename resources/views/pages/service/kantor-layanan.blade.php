@extends('layouts.home')

@section('title')
    Kantor Layanan | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Kantor Layanan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Layanan</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Kantor Layanan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class=" wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Kantor Layanan</div>
                    <h1 class="display-6 mb-5">Kantor Layanan Yayasan Kami</h1>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with
                        Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a
                            href="https://htmlcodex.com/contact-form">Download Now</a>.</p>

                    <p><b>Alamat :</b></p>
                    <p>Yayasan Anshor Yatim & Dhuafa, Jl. Griya Indah Serpong No.14 Blok V1, Cibinong, Kec. Gn. Sindur,
                        Kabupaten Bogor, Jawa Barat 16340</p>
                    <p><b>Sosial Media :</b></p>
                    <div class="d-flex gap-2 align-items-center">
                        <a class="btn btn-outline-primary
                            py-2 px-3"
                            href="https://www.instagram.com/anshor_yatim_dhuafa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank">
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary
                            py-2 px-3"
                            href="https://www.instagram.com/anshor_yatim_dhuafa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank">
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                                <i class="fa-brands fa-square-facebook"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary
                            py-2 px-3"
                            href="https://www.instagram.com/anshor_yatim_dhuafa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank">
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                        </a>
                    </div>
                    <br>
                    <p><b>Lokasi :</b></p>
                    <div class=" wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                        <div class="position-relative rounded overflow-hidden h-100">
                            <iframe class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0130027500713!2d106.68628447603952!3d-6.392323262524768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e7cee8643b27%3A0xb72b4fb8fcf7ab50!2sYayasan%20Anshor%20Yatim%20%26%20Dhuafa!5e0!3m2!1sid!2sid!4v1716700267821!5m2!1sid!2sid"
                                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
