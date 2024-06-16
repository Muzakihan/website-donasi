@extends('layouts.home')

@section('title')
    AYD Cerdas| Program
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

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
              
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape"
                  />
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds"
                  />
              
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea"
                  />
              
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park"
                  />
                </div>
              </div>
        </div>
    </div>
@endsection
