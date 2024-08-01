@extends('layouts.home')

@section('title')
    Publikasi | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Artikel</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Publikasi</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Artikel</div>
                <h1 class="display-6">Artikel Yayasan Anshor</h1>
                <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor
                    duo.</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 wow fadeInUp position-relative " data-wow-delay="0.1s">
                        <div class="position-absolute top-0 start-0 pt-2 ps-4">
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">
                                <i class="fa-solid fa-calendar"></i> {{ $article->created_at->format('d/m/Y') }}
                            </div>
                            <div class="d-inline-block rounded bg-secondary text-primary py-1 px-3 mb-3">
                                {{ $article->categoryArticle->name ?? 'Uncategorized' }}
                            </div>
                        </div>
                        <div class="service-item bg-white text-left h-100 ">
                            <img class="img-fluid mb-4 rounded-top" src="{{ Storage::url($article->photos) }}"
                                alt="{{ $article->title }}">
                            <div class="p-3">
                                <div class="d-flex gap-4">
                                    <div class="d-flex flex-column justify-content-start">
                                        <p class="text-primary m-0 fs-6">SEP</p>
                                        <h3>12</h3>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-3  text-xl">{{ Str::limit(strip_tags($article->title), 55) }}</h5>
                                        <p class="mb-4">{{ Str::limit(strip_tags($article->content), 50) }}</p>
                                    </div>
                                </div>

                                <a class="btn w-100 btn-outline-primary px-3" href="{{ route('event-single', $article->id) }}">
                                    Lihat Event
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
