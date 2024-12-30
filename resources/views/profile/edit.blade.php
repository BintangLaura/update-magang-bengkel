<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Bengkel | Mitra Page</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Link Favicon -->
        {{-- <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico') }}" /> --}}

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('assets-bengkel/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets-bengkel/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('assets-bengkel/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets-bengkel/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

     <!-- Navbar & Hero Start -->
     <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>Bengkel</h1>
                    {{-- <img src="{{asset('assets-bengkel/img/logo.png')}}" alt="Logo"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('mitra.mitra') }}" class="nav-item nav-link">Produk</a>
                        <a href="{{ route('mitra.kategori') }}" class="nav-item nav-link">Kategori</a>
                        <a href="{{ route('profile.edit') }}" class="nav-item nav-link active">Profil</a>
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
    <div class="container-fluid overflow-hidden about py-5">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="pb-2">
                            <h1 class="display-5 text-capitalize">Profil <span class="text-primary">Kami</span></h1>
                        </div>
                        <div class="row g-4">
                            <x-app-layout>
                                <div class="py-12">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                            <div class="text-item max-w-xl">
                                                @include('profile.partials.update-profile-information-form')
                                            </div>
                                        </div>
                                        <br>
                                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                            <div class="text-item max-w-xl">
                                                @include('profile.partials.update-password-form')
                                            </div>
                                        </div>
                                        <br>
                                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                            <div class="text-item max-w-xl">
                                                @include('profile.partials.delete-user-form')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </x-app-layout>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="{{asset('assets-bengkel/img/about-img.jpg')}}" class="img-fluid rounded h-100 w-100" alt="img-1-about">
                        </div>
                        <div class="img-2">
                            <img src="{{asset('assets-bengkel/img/about-img-1.jpg')}}" class="img-fluid rounded w-100" alt="img-2-about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
       </div> --}}
        <!-- Spinner End -->



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets-bengkel/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets-bengkel/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets-bengkel/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets-bengkel/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets-bengkel/lib/owlcarousel/owl.carousel.min.js')}}"></script>


    <!-- Template Javascript -->
    <script src="{{asset('assets-bengkel/js/main.js')}}"></script>
    </body>

</html>
