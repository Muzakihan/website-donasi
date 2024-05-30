    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Jl. Griya Indah Serpong, Cibinong, Kec. Gn. Sindur, Kab
                    Bogor, Jawa Barat</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>anshoryatimdhuafa@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3"
                    href="https://www.instagram.com/anshor_yatim_dhuafa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
                <h1>
                    <img class="logo" src="{{ asset('assets/img/logo.png') }}" alt=""><span
                        class="fw-bold text-white">Anshor Yatim Dhuafa</span>
                </h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('profil') }}" class="dropdown-item">Profil</a>
                            <a href="{{ route('struktur') }}" class="dropdown-item">Struktur</a>
                            <a href="{{ route('legal-formal') }}" class="dropdown-item">Legal Formal</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('kantor-layanan') }}" class="dropdown-item">Kantor Layanan</a>
                            <a href="{{ route('jemput-layanan') }}" class="dropdown-item">Jemput Zakat</a>
                            <a href="{{ route('rekening-donasi') }}" class="dropdown-item">Rekening Donasi</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('service') }}" class="dropdown-item">AYD Sehat</a>
                            <a href="{{ route('donate') }}" class="dropdown-item">AYD Cerdas</a>
                            <a href="{{ route('team') }}" class="dropdown-item">AYD Mandiri</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publikasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('event') }}" class="dropdown-item">Event</a>
                            <a href="{{ route('artikel') }}" class="dropdown-item">Artikel</a>
                            <a href="{{ route('laporan-keuangan') }}" class="dropdown-item">Laporan Keuangan</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="{{ route('donate') }}">
                        Donate Now
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
