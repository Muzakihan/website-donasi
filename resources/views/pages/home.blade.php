@extends('layouts.home')

@section('title')
    Home | Donation
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/banner1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Change The World With
                                        Humanity</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos.
                                        Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
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
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/banner3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save More Lifes With
                                        Our Helping Hand</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos.
                                        Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
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
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="about-img img-fluid position-absolute w-100 h-100 pt-5 " src="assets/img/about-1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">We Help People In Need Around The World</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem
                                sit clita duo justo erat amet</p>
                            <span class="text-primary">Jhon Doe, Founder</span>
                        </div>
                        <p class="mb-5">
                            <span class="text-primary"> Yayasan Anshor Yatim Dhuafa ( AYD ) </span> adalah sebuah organisasi
                            nirlaba yang bergerak di bidang
                            pendidikan dan sosial. Yayasan ini didirikan pada tanggal 21 September 2023. <br> Sejak
                            disahkannya
                            Akta Yayasan Anshor Yatim & Dhuafa dengan SK.KEMENKUMHAM.NO.AHU-0015718.AH.01.04.Tahun 2023 di
                            Gunung Sindur, Bogor, Jawa Barat.
                        </p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="{{ route('profil') }}">
                            Lihat Detail
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="{{ route('struktur') }}">
                            Struktur Organisasi
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Causes Start -->


    <!-- Causes End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($donates as $donate)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded overflow-hidden h-100">
                            <div class="position-relative mt-auto">
                                <img class="img-fluid rounded" src="{{ Storage::url($donate->photos) }}" alt="">
                                <div class="causes-overlay rounded-bottom">
                                    <a class="btn btn-outline-primary" href="">
                                        Read More
                                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white rounded fs-5 pb-1 px-3 mb-4 mt-2">
                                    <small>{{ $donate->categoryDonate->name }}</small>
                                </div>
                                <h5 class="mb-3">{{ $donate->name }}</h5>
                                <p>{!! $donate->thumbnail_description !!}</p>
                                <div class="causes-progress bg-light p-3 pt-2 mb-3 ">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-dark mb-0">{{ number_format($donate->goal_price) }} <small
                                                class="text-body">Goal</small></p>
                                        <p class="text-dark mb-0">{{ number_format($donate->current_price) }} <small
                                                class="text-body">Terkumpul</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Service End -->


    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="assets/img/banner2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                    <h1 class="display-6 text-white mb-5">Thanks For The Results Achieved With You</h1>
                    <p class="text-white-50 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                        amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore
                        erat amet</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form method="POST" action="{{ route('donate.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <!-- Username -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="username"
                                            id="username" placeholder="Your Name" required>
                                        <label for="username">Your Name</label>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-light border-0" name="email"
                                            id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <!-- Phone Number -->
                                <div class="col-12">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2" style="flex: 0 0 100px;"> <!-- Lebar dropdown kode negara diatur menjadi 80px -->
                                            <select class="form-control bg-light border-0 py-3 pe-2" name="country_code" id="country_code">
                                                <option value="+62" selected>+62 (IDN)</option>
                                                <option value="+1">+1 (USA)</option>
                                                <option value="+44">+44 (UK)</option>
                                                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                            </select>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <input type="text" class="form-control bg-light border-0 py-3 pe-2" name="phone_number" id="phone_number"
                                                placeholder="Your Phone Number">
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- Campaign Selection -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select id="products_id" name="donate_id" class="form-control bg-light border-0">
                                            <option value="">Choose Campaign</option>
                                            @foreach ($donates as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="products_id">Choose Campaign</label>
                                    </div>
                                </div>
                                <!-- Hope For The Foundation -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0"
                                            name="hope_for_foundation" id="hope_for_foundation" placeholder="">
                                        <label for="hope_for_foundation">Hope For The Foundation</label>
                                    </div>
                                </div>
                                <!-- Hope For You -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="hope_for_you"
                                            id="hope_for_you" placeholder="">
                                        <label for="hope_for_you">Hope For You</label>
                                    </div>
                                </div>
                                <!-- Donation Options -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="btn-group d-flex flex-wrap justify-content-around">
                                                <input type="radio" class="btn-check" name="donate_price" id="donate_option1"
                                                    value="10000" onclick="toggleCustomAmount(false)">
                                                <label class="btn btn-light py-3 m-1" for="donate_option1">Rp.10.000</label>
                                                
                                                <input type="radio" class="btn-check" name="donate_price" id="donate_option2"
                                                    value="20000" onclick="toggleCustomAmount(false)">
                                                <label class="btn btn-light py-3 m-1" for="donate_option2">Rp.20.000</label>
                                                
                                                <input type="radio" class="btn-check" name="donate_price" id="donate_option3"
                                                    value="30000" onclick="toggleCustomAmount(false)">
                                                <label class="btn btn-light py-3 m-1" for="donate_option3">Rp.30.000</label>
                                                
                                                <input type="radio" class="btn-check" name="donate_price" id="donate_custom"
                                                    value="custom" onclick="toggleCustomAmount(true)">
                                                <label class="btn btn-light py-3 m-1" for="donate_custom">Custom Amount</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Custom Amount Input -->
                                <div class="col-12 mt-3 mb-2">
                                    <p class="text-center mb-0"><strong>Or Adjust Your Donation </strong></p>
                                </div>
                                <div class="col-12">
                                    <div id="custom_amount_container" class="mt-2 d-flex align-items-center">
                                        <div class="input-text rounded-start py-3 pe-2"  style="flex: 0 0 40px;">Rp.</div>
                                        <input type="text" name="custom_amount" id="custom_amount"
                                            class="flex-grow-1 input-text rounded-end  border-1 py-3 pe-2" 
                                            placeholder="Adjust your donation amount" oninput="formatCurrency(this)" 
                                            disabled>
                                    </div>
                                </div>
                                
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary" id="pay-button">Donate Now</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-1.png" alt="">
                        <h4 class="mb-3">Child Education</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-2.png" alt="">
                        <h4 class="mb-3">Medical Treatment</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="assets/img/icon-3.png" alt="">
                        <h4 class="mb-3">Pure Drinking Water</h4>
                        <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                            dolor duo.</p>
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

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div>
                <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="assets/img/team-4.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
