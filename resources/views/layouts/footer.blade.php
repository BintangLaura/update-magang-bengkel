@extends('layouts.home')


@section('footer')
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
                        <img src="{{asset('assets/img/Qr Code.png')}}" class="me-3" alt="">
                        <img src="{{asset('assets/img/Frame 718.png')}}" alt="">
                        <div class="d-flex mt-3">
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container-fluid">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-white text-center mx-auto"><i class="fas fa-copyright text-light me-2"></i> PintuKeluar 2022</a>, All right reserved.</span>
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
@endsection
