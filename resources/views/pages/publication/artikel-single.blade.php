@extends('layouts.home')

@section('title')
    {{ $singleArticle->title }} | Donation
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Laman Artikel</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('articles') }}">Artikel</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $singleArticle->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Article Start -->
    <div class="container py-5">
        <div class=" header-single-post container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s">
            <img class="logo h-auto" src="{{ Storage::url($singleArticle->photos) }}" alt="{{ $singleArticle->title }}" alt="" style="width: 100%;">
        </div>

        <div class="d-flex">
            <div class="social-media-blog d-flex flex-column gap-2 m-5 align-items-center">
                <p>Sosial</p>
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
    
            <div class="header-media-blog">
                <h1>{{ $singleArticle->title }}</h1>
                <p>{{ $singleArticle->categoryArticle->name ?? 'Uncategorized' }} - {{ $singleArticle->created_at->format('d/m/Y') }}</p>
                <div class="content-blog article-content mt-5">
                    {!! $singleArticle->content !!}
                </div>
                
            </div>
        </div>
    </div>
    <!-- Article End -->

    <hr class="mt-5 mb-5">

    <!-- Related Articles Start -->
    <h1 class="text-center text-black animated slideInDown mb-4 mt-4">Berita Lainnya</h1>
    @if ($relatedArticles->isEmpty())
        <p>Tidak ada artikel terkait.</p>
    @else
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ($relatedArticles as $related)
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
                            <img class="img-fluid mb-4" src="{{ Storage::url($related->photos) }}" alt="{{ $related->title }}">

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
