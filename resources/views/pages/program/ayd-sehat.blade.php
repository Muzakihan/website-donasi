@extends('layouts.home')

@section('title')
    AYD Sehat| Program
@endsection

@section('content')
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">AYD Sehat</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Program</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">AYD Sehat</li>
            </ol>
        </nav>
    </div>
</div>
<section class="container w-50">
    <header>

        <h1 class="w-75 text-start">Program Unggulan Sahabat Yatim sebagai Lembaga Amil Zakat Nasional </h1>
        <p class="w-75 text-start">Meliputi Yatim Center, Pendidikan, Kesehatan, Ekonomi, Sosial Kemanusiaan, dan Dakwah</p>
    </header>
    <div class="content">
        <p>
            Setiap warga negara berhak mendapatkan pendidikan adalah isi dari Pasal 31 ayat (1) Undang – Undang Dasar 1945
            Untuk itu Sahabat Yatim merasa perlu berperan aktif dalam menjalankan amanat Undang – undang diantaranya memberikan kesempatan anak yatim dan dhuafa untuk memperoleh Pendidikan yang layak untuk masa depan mereka yang lebih baik.
        </p>
        <h3 class="mt-4">Tujuan Program</h3>
        <blockquote class="blockquote p-3 rounded">
            <p>A well-known quote, contained in a blockquote element.</p>
        </blockquote>
    </div>
	<div class="row gallery">
        <h3 class="mt-4">Documentation Program</h3>
        @foreach($pagedImages as $image)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{ $image }}">
                    <figure><img class="img-fluid img-thumbnail" src="{{ $image }}" alt="Random Image"></figure>
                </a>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ url('ayd-sehat?page=' . $i) }}" class="{{ $i == $page ? 'active' : '' }}">{{ $i }}</a>
        @endfor
    </div>
    </div>
</section>
<style>
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .pagination a {
        margin: 0 5px;
        padding: 10px 15px;
        border: 1px solid #ddd;
        color: #007bff;
        text-decoration: none;
    }
    .pagination a.active {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
    }
</style>
@endsection