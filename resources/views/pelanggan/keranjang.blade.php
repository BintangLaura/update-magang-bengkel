<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Bengkel | Page Pelanggan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Link Favicon -->
        {{-- <link rel="icon" type="image/x-icon" href="img/favicon.ico" /> --}}

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets-bengkel/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets-bengkel/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets-bengkel/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets-bengkel/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <!-- <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="tel:+01234567890" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="mailto:example@gmail.com" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>Bengkel</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="#" class="nav-item nav-link">Service</a>
                            <a href="#" class="nav-item nav-link">Product</a>
                            <a href="#" class="nav-item nav-link">News</a>
                            <a href="#" class="nav-item nav-link active">Trolley</a>
                        </div>
                         <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-primary rounded-pill py-2 px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{Auth::user()->nama}}
                        </a>
                        <ul class="dropdown-menu">
                          <li><hr class="dropdown-divider"></li>
                          <li class="dropdown-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                         </li>
                        </ul>
                    </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-12">
                      <div class="card mb-4">
                        <div class="card-header pb-0">
                          <h6>Keranjang</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                          <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 table-responsive table-hover">
                              <thead>
                                <tr>
                                  {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 w-10">No</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Produk</th> --}}
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                              </thead>
                              @foreach ($cart as $c)
                              <tbody>
                                <tr>
                                  <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                  <td class="align-middle"><img src="{{ url('/data_img/').'/'.$c->product->image }}" width="100"></td>
                                  <td class="align-middle text-center text-sm">{{ $c->product->product_name }}</td>
                                  <td class="align-middle">{{ $c->jumlah }}</td>
                                  <td class="align-middle">{{ $c->product->harga }}</td>
                                  <td class="align-middle">
                                    <a href="#" class="btn btn-outline-danger btn-sm ms-3"><i class="nav-icon fas fa-trash"></i></a>
                                  </td>
                                </tr>
                              </tbody>
                              @endforeach
                            </table>
                            <br>
                            <br>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container-fluid py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Exclusive</h4>
                                <p class="mb-3">Subscribe</p>
                                <p class="mb-3">Get 10% off your first order</p>
                            </div>
                            <div class="position-relative">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Account</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> My Account</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Login/Register</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Cart</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Wishlist</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Shop</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Term Of Use</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Download App</h4>
                                <p class="mb-3">Save $3 with App New User Only</p>
                                <img src="{{asset('assets-bengkel/img/Qr Code.png')}}" class="me-3" alt="">
                                <img src="{{asset('assets-bengkel/img/Frame 718.png')}}" alt="">
                                <div class="d-flex mt-3">
                                    <a class="btn btn-secondary btn-sm-rounded-circle me-3" href=""><i class="fab fa-facebook-f text-white"></i></a>
                                    <a class="btn btn-secondary btn-sm-rounded-circle me-3" href=""><i class="fab fa-twitter text-white"></i></a>
                                    <a class="btn btn-secondary btn-sm-rounded-circle me-3" href=""><i class="fab fa-instagram text-white"></i></a>
                                    <a class="btn btn-secondary btn-sm-rounded-circle me-0" href=""><i class="fab fa-linkedin-in text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container-fluid">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white mx-auto"><i class="fas fa-copyright text-light me-2"></i> PintuKeluar 2022</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets-bengkel/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets-bengkel/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets-bengkel/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-bengkel/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets-bengkel/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets-bengkel/js/main.js') }}"></script>
    </body>

</html>
