<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Bengkel</title>
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

        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
       </div> --}}
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        @include('layouts.navbar')
        <!-- Navbar & Hero End -->

        {{-- Landing Page Start --}}
        @yield('landing-page')
        {{-- Landing Page End --}}

        {{-- Page Mitra Start --}}
        @yield('page-mitra')
        {{-- Page Mitra End --}}
        {{-- Login Start --}}
        @yield('login')
        {{-- Login End --}}

        {{-- Regis Start --}}
        @yield('regis')
        {{-- Regis End --}}

        {{-- Checkout Start --}}
        @yield('checkout')
        {{-- Checkout End --}}

        {{-- Bayar Start --}}
        @yield('bayar')
        {{-- Bayar End --}}

        {{-- Bayar Start --}}
        @yield('edit-profile')
        {{-- Bayar End --}}

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->

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
