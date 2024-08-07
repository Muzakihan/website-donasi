@extends('layouts.home')

@section('title', 'Donate | Donation')

@section('content')
    <!-- Page Header -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Donasi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Donasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Donate Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Left Column -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                    <h1 class="display-6 mb-5">Thanks For The Results Achieved With You</h1>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                </div>
                <!-- Right Column -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-secondary p-5">
                        <!-- Donation Form -->
                        <form id="donate-form" method="POST" enctype="multipart/form-data">
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
                                        <div class="me-2" style="flex: 0 0 100px;">
                                            <div class="dropdown">
                                                <div class="dropdown-button">Pilih Negara</div>
                                                <div class="dropdown-content" id="countryDropdown">
                                                    <input type="text" class="search-input" id="searchInput"
                                                        placeholder="Cari negara...">
                                                    <div id="countryList"></div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="country_code" id="country_code">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <input type="text" class="form-control bg-light border-0 py-3 pe-2"
                                                name="phone_number" id="phone_number" placeholder="Your Phone Number">
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
                                                <input type="radio" class="btn-check" name="donate_price"
                                                    id="donate_option1" value="10000" onclick="toggleCustomAmount(false)">
                                                <label class="btn btn-light py-3 m-1" for="donate_option1">Rp.10.000</label>

                                                <input type="radio" class="btn-check" name="donate_price"
                                                    id="donate_option2" value="20000"
                                                    onclick="toggleCustomAmount(false)">
                                                <label class="btn btn-light py-3 m-1"
                                                    for="donate_option2">Rp.20.000</label>

                                                <input type="radio" class="btn-check" name="donate_price"
                                                    id="donate_option3" value="30000"
                                                    onclick="toggleCustomAmount(false)">
                                                <label class="btn btn-light py-3 m-1"
                                                    for="donate_option3">Rp.30.000</label>

                                                <input type="radio" class="btn-check" name="donate_price"
                                                    id="donate_custom" value="custom" onclick="toggleCustomAmount(true)">
                                                <label class="btn btn-light py-3 m-1" for="donate_custom">Custom
                                                    Amount</label>
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
                                        <div class="input-text rounded-start py-3 pe-2" style="flex: 0 0 40px;">Rp.</div>
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
                        <!-- End Donation Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Section End -->

    <!-- More Campaigns Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($donates as $donate)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded overflow-hidden h-100">
                            <div class="position-relative mt-auto">
                                @if ($donate->photos)
                                    <img class="img-fluid rounded" src="{{ Storage::url($donate->photos) }}"
                                        alt="">
                                @endif
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
                                        <p class="text-dark mb-0">{{ number_format($donate->goal_price) }}
                                            <small class="text-body">Goal</small>
                                        </p>
                                        <p class="text-dark mb-0">{{ number_format($donate->current_price) }}
                                            <small class="text-body">Raised</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div id="confirmationModal" class="modal fade" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Exit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>If you leave this page, your payment will be canceled. Are you sure you want to leave?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="stay-on-page" class="btn btn-secondary" data-bs-dismiss="modal">Stay on
                        Page</button>
                    <a href="" id="exit-link" class="btn btn-primary">Leave Page</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        let snapToken = '';
        let hasClickedLeavePage = false;

        document.getElementById('pay-button').addEventListener('click', function(e) {
            e.preventDefault();

            var form = document.getElementById('donate-form');
            var formData = new FormData(form);

            var previousPageUrl = window.location.href;

            fetch('{{ route('donate.store') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(Object.fromEntries(formData))
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snap_token) {
                        snapToken = data.snap_token;
                        snap.pay(data.snap_token, {
                            onSuccess: function(result) {
                                console.log('Payment success', result);
                                window.location.href = '/finish';
                            },
                            onPending: function(result) {
                                console.log('Waiting for payment', result);
                                var modal = new bootstrap.Modal(document.getElementById(
                                    'confirmationModal'));
                                modal.show();

                                var stayOnPageButton = document.getElementById('stay-on-page');
                                stayOnPageButton.addEventListener('click', function() {
                                    modal.hide();
                                    hasClickedLeavePage = false;
                                    snap.pay(snapToken, {
                                        onSuccess: function(result) {
                                            console.log('Payment success',
                                                result);
                                            window.location.href = '/finish';
                                        },
                                        onPending: function(result) {
                                            console.log('Waiting for payment',
                                                result);
                                            modal.show();
                                        },
                                        onError: function(result) {
                                            console.log('Payment failed',
                                                result);
                                            alert('Payment failed');
                                        }
                                    });
                                });

                                var exitLink = document.getElementById('exit-link');
                                exitLink.href = previousPageUrl;
                                exitLink.addEventListener('click', function() {
                                    hasClickedLeavePage =
                                        true;
                                });
                            },
                            onError: function(result) {
                                console.log('Payment failed', result);
                                alert('Payment failed');
                            },
                        });
                    } else {
                        alert('Error fetching snap token');
                    }
                })
                .catch(error => console.error('Error fetching snap token:', error));
        });
    </script>
@endsection
