@extends('layouts.home')

@section('navbar')
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
                   <a href="#" class="nav-item nav-link">Service</a>
                   <a href="#" class="nav-item nav-link">Product</a>
                   <a href="#" class="nav-item nav-link">News</a>
                   <a id="cartBtn" href="#" class="nav-item nav-link">Trolley</a>
               </div>
               <a href="/login" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-user">  Login</i></a>
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
               <img src="{{asset('assets/img/Frame 560.png')}}" class="img-fluid w-100" alt="First slide"/>
           </div>
           <div class="carousel-item active">
               <img src="{{asset('assets/img/carousel-2.jpg')}}" class="img-fluid w-100" alt="Second slide"/>
           </div>
           <div class="carousel-item">
               <img src="{{asset('assets/img/Frame 560.png')}}" class="img-fluid w-100" alt="Third slide"/>
           </div>
           <div class="carousel-item">
               <img src="{{asset('assets/img/carousel-1.jpg')}}" class="img-fluid w-100" alt="Forth slide"/>
           </div>
       </div>
   </div>
</div>
<!-- Carousel End -->
@endsection
