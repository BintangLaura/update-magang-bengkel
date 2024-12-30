<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bengkel | Mitra Page</title>
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
                        <a href="{{ route('mitra.mitra') }}" class="nav-item nav-link">Produk</a>
                        <a href="{{ route('mitra.kategori') }}" class="nav-item nav-link active">Kategori</a>
                        <a href="{{ route('profile.edit') }}" class="nav-item nav-link">Profil</a>
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
                    {{-- <a href="#" class="nav-link dropdown-toggle btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-user"> {{Auth::user()->nama}}</i></a> --}}
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-fluid service">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Kategori <span class="text-primary">Produk</span></h1>
                <p class="mb-0">Berikut adalah beberapa kategori produk yang kami miliki :
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
    {{-- Ini Halaman Kategori Produk --}}
</body>
</html>
