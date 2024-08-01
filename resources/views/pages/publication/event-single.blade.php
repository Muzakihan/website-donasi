@extends('layouts.home')

@section('title')
    {{ $singleEvent->title }} | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Laman Event</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('articles') }}">Event</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $singleEvent->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Article Start -->
    <div class="container main-container-event py-5  mr-5 ml-5" style="max-width: 100%">
        <div class="header-event">
                <h1 class="fs-1 text-center">{{ $singleEvent->title }}</h1>
                <p class="text-center">By Yayasan Anshor  -
                    {{ $singleEvent->created_at->format('d/m/Y') }}</p>
        </div>
        <div class="d-flex justify-content-center header-single-post container-fluid mb-5 mb-md-0 wow fadeIn" data-wow-delay="0.1s">
            <img class=" h-auto mx-auto" src="{{ Storage::url($singleEvent->photos) }}" alt="{{ $singleEvent->title }}"
                alt="" style="width: 80%;">
        </div>

        <div class="container-article d-flex flex-column p-3 flex-md-row">
            <div class="header-media-blog flex-grow-1 col-md-8">
                <div class="content-blog article-content mt-5">
                    {!! $singleEvent->content !!}
                </div>
            </div>
            <div class="location-media-blog col-md-4 mt-5">
                <h2 class="mb-4">Lokasi Event</h2>
                <div class="wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden rounded">
                        <iframe class="position-relative w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0130027500713!2d106.68628447603952!3d-6.392323262524768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e7cee8643b27%3A0xb72b4fb8fcf7ab50!2sYayasan%20Anshor%20Yatim%20%26%20Dhuafa!5e0!3m2!1sid!2sid!4v1716700267821!5m2!1sid!2sid"
                            frameborder="0" style="height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
                <h2 class="mb-4 mt-4">Detail Alamat</h2>
                <p class="mt-2">Jl. Griya Indah Serpong No.14 Blok V1, Cibinong, Kec. Gn. Sindur, Kabupaten Bogor, Jawa Barat 16340</p>
                <p><b>Lihat Di Google Maps</b></p>
                <h2 class="mb-4 mt-4">Kategori</h2>
                <div class="d-flex gap-2">

                    <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">
                        Santunan Anak Yatim
                    </div>
                    <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">
                        Yayasan Anshor
                    </div>
                </div>
                <h2 class="mb-4 mt-4">Bagikan Event</h2>
                <div class="social-media-blog d-flex gap-2  align-items-center">
                    <a class="btn py-2 px-3" href="#">
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                    </a>
                    <a class="btn py-2 px-3" href="#">
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </a>
                    <a class="btn py-2 px-3" href="#">
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- Article End -->

    <hr class="mt-2 mb-2">

    <!-- Related Articles Start -->
    <h1 class="text-center text-black animated slideInDown mb-4 mt-4">Event Lainnya</h1>
    @if ($relatedEvents->isEmpty())
        <p class="text-center text-black animated slideInDown mb-4 mt-4">Tidak ada berita</p>
    @else
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ($relatedEvents as $related)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-left h-100 p-4 p-xl-5">
                            <h4 class="mb-3">{{ $related->title }}</h4>
                            <div>
                                <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">
                                    <i class="fa-solid fa-calendar"></i> {{ $related->created_at->format('d/m/Y') }}
                                </div>
                                <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">
                                    {{ $related->categoryArticle->name ?? 'Uncategorized' }}
                                </div>
                            </div>
                            <p class="mb-4">{{ Str::limit(strip_tags($related->content), 50) }}</p>
                            <img class="img-fluid mb-4" src="{{ Storage::url($related->photos) }}"
                                alt="{{ $related->title }}">

                            <a class="btn btn-outline-primary px-3" href="{{ route('single-article', $related->id) }}">
                                Learn Moreeb
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <!-- Related Articles End -->
@endsection
