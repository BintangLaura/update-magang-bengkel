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
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a id="#service" class="nav-item nav-link">Service</a>
                            <a href="#" class="nav-item nav-link">Product</a>
                            <a href="#" class="nav-item nav-link">News</a>
                            <a href="/keranjang" class="nav-item nav-link">Trolley</a>
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

        <!-- Carousel Start -->
        <div class="header-carousel">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Forth slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item">
                        <img src="{{ asset('assets-bengkel/img/Frame 560.png')}}" class="img-fluid w-100" alt="First slide"/>
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('assets-bengkel/img/carousel-2.jpg')}}" class="img-fluid w-100" alt="Second slide"/>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets-bengkel/img/Frame 560.png')}}" class="img-fluid w-100" alt="Third slide"/>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets-bengkel/img/carousel-1.jpg')}}" class="img-fluid w-100" alt="Forth slide"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 id="#service" class="display-5 text-capitalize mb-3">Our <span class="text-primary">Services</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <img src="{{ asset('assets-bengkel/img/oil.png')}}" class="mx-auto" alt="Oli" width="50%">
                            </div>
                            <h5 class="mb-3">Ganti Oli Mesin</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                            <a href="/checkout-jasa" class="btn btn-primary rounded-pill py-2 px-4">Pesan</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <img src="{{ asset('assets-bengkel/img/car.png')}}" class="mx-auto" alt="Derek" width="50%">
                            </div>
                            <h5 class="mb-3">Tambah Angin + Derek</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                            <a href="/checkout-jasa" class="btn btn-primary rounded-pill py-2 px-4">Pesan</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <img src="{{ asset('assets-bengkel/img/settings.png')}}" class="mx-auto" alt="Tambal" width="50%">
                            </div>
                            <h5 class="mb-3">Tambal Ban</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                            <a href="/checkout-jasa" class="btn btn-primary rounded-pill py-2 px-4">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Car categories Start -->
        <div class="container-fluid categories pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our <span class="text-primary">Product</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="container-fluid service py-5">
                    <div class="container py-5">
                        <div class="row g-4">
                            @foreach ($products as $product)
                            <div class="col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item p-4">
                                    <img src="{{ url('/data_img/').'/'.$product->image }}" class="mx-auto" alt="Oli" width="50%">
                                    <br>
                                    <h5 class="mb-3">{{$product->product_name}}</h5>
                                    <p class="mb-0 pb-0">{{$product->description}}</p>
                                    <table>
                                        <tr>
                                            <td>Harga Produk</td>
                                            <td>:</td>
                                            <td>{{$product->harga}}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok Produk</td>
                                            <td>:</td>
                                            <td>{{$product->stock}}</td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{route('tambahKeranjang', ['product' => $product->id])}}" method="post">
                                                <button type="submit" class="btn btn-warning rounded-pill py-2 px-4">Add To Cart</button>
                                                <a href="/checkout-barang" class="btn btn-danger rounded-pill py-2 px-4">Beli</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Car categories End -->

        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Product <span class="text-primary">Categories</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <img src="{{asset('assets-bengkel/img/oil.png')}}" class="mx-auto" alt="Oli" width="50%">
                            </div>
                            <h5 class="mb-3">Oli</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Lihat</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <img src="{{asset('assets-bengkel/img/car.png')}}" class="mx-auto" alt="Derek" width="50%">
                            </div>
                            <h5 class="mb-3">Ban</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Lihat</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <img src="{{asset('assets-bengkel/img/settings.png')}}" class="mx-auto" alt="Tambal" width="50%">
                            </div>
                            <h5 class="mb-3">Spare Part</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Steps Start -->
        <div class="container-fluid steps py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize text-white mb-3">Order<span class="text-primary"> Process</span></h1>
                    <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Pilih Jasa/Produk</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">01.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Pesan Jasa/Produk</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">02.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Nikmati Pelayanan dan Produk Pesanan Anda</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                            <div class="setps-number">03.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Car Steps End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Bengkel<span class="text-primary"> Blog & News</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('assets-bengkel/img/blog-1.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">30 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Tips Memilih Oli Sesuai Jenis Mobil</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Baca Selengkapnya  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('assets-bengkel/img/blog-2.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">25 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Merk Ban Terbaik Dunia</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('assets-bengkel/img/blog-3.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <div class="blog-date">27 Dec 2025</div>
                                <div class="blog-comment my-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                                </div>
                                <a href="#" class="h4 d-block mb-3">Cara Rawat Spare Part Agar Tetap Awet</a>
                                <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                                <a href="#" class="">Baca Selengkapnya  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our<span class="text-primary"> Advantages</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="{{asset('assets-bengkel/img/Delivery.png')}}" class="img-fluid rounded w-50" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>FREE AND FAST DELIVERY</h4>
                                <p>Free Delivery For All Orders Over $140</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="{{asset('assets-bengkel/img/Services.png')}}" class="img-fluid rounded w-50" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>24/7 CUSTOMER SERVICE</h4>
                                <p>Friendly 24/7 Customer Support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item p-4 pt-0">
                            <div class="team-img">
                                <img src="{{asset('assets-bengkel/img/Security.png')}}" class="img-fluid rounded w-50" alt="Image">
                            </div>
                            <div class="team-content pt-4">
                                <h4>MONEY BACK GUARANTEE</h4>
                                <p>We Return Money Within 30 Days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

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


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-sm-rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
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
