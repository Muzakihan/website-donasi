@extends('layouts.home')

@section('title')
    About | Donation
@endsection

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Legal Formal
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Legal Formal</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container-faq">
            <div class="faq">
                <button class="accordion">
                    Akta Yayasan Anshor Yatim & Dhuafa
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <p>
                        Akta Yayasan Anshor Yatim & Dhuafa dengan SK.KEMENKUMHAM.NO.AHU-0015718.AH.01.04.Tahun 2023 di
                        Gunung Sindur, Bogor, Jawa Barat.
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion">
                    How does it work?
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                        saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                        ullam, iure eligendi harum eaque hic corporis debitis porro
                        consectetur voluptate rem officiis architecto.
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion">
                    What are the major challanges of current agriculture?
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="pannel">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                        saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                        ullam, iure eligendi harum eaque hic corporis debitis porro
                        consectetur voluptate rem officiis architecto.
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- Team End -->
@endsection
