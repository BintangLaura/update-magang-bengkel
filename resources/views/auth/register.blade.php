<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Bengkel</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Link Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

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
        <link href="{{asset('assets-bengkel/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets-bengkel/css/style.css')}}" rel="stylesheet">
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .login-header {
                background-color: #ffffff;
                padding: 15px 0;
                text-align: center;
                font-size: 24px;
                font-weight: bold;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 1000;
            }

            .welcome-text {
                color: #5B5B5B;
                text-align: center;
                margin-top: 70px;
            }

            .login-container {
                margin-top: 50px;
            }

            .login-form {
                padding: 30px;
                border-radius: 10px;
            }

            .login-form a {
                color: #092365;
            }

            .login-form .btn-custom {
                width: 230px;
                display: block;
                margin: 0 auto;
                background-color: #092365;
                border-color: #092365;
                color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
            }

            .register-link {
                text-align: center;
                margin-top: 20px;
            }

            .form-control {
                border-color: #000000;
                border-radius: 10px;
            }

            .form-control:focus {
                box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <div class="login-header">
            Registrasi
        </div>
        <div class="container login-container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="welcome-text">
                        <h4 style="font-weight: bold">Selamat Datang di Pintukeluar!</h4>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="nohp">No Handphone</label>
                                <input type="number" class="form-control" id="nohp" name="nohp" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group mt-2">
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                                <x-text-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required autocomplete="off" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="form-group mt-2">
                                <x-input-label for="group_id" :value="__('Role User')" />

                                <select name="group_id" class="form-control">
                                    <option>-- Choose Role User --</option>
                                    <option value="1">Mitra</option>
                                    <option value="2">Pelanggan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-custom mt-3">Registrasi</button>
                        </form>
                        <div class="register-link">
                            Sudah punya akun? <a href="{{route ('login')}}">Masuk di sini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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






