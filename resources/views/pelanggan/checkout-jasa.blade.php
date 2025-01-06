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
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            /* Centering the checkout title */
            .navbar .text-center {
                flex-grow: 1;
                text-align: center;
            }

            /* Customizing icons */
            .bi {
                font-size: 1.5rem;
            }

            /* Table column width control */
            table th,
            table td {
                text-align: center;
            }

            /* Making cards more compact */
            .card {
                border: 1px solid #ddd;
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

    <!-- Shipping Address Section -->
    <section class="p-4">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="fa fa-map-pin fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title">Alamat Pemesan</h5>
                    <p class="card-text">{{Auth::user()->alamat}}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-4">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="fa fa-map fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title">Alamat Bengkel Terdekat</h5>
                    <p class="card-text">Lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Details Section -->
    <section class="p-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Jasa Yang Dipesan</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="img/car.png" alt="Oli Motor" class="img-fluid" style="width: 50px;">
                            <span class="ms-3"></span>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="img/settings.png" alt="Oli Motor" class="img-fluid" style="width: 50px;">
                            <span class="ms-3">Jasa</span>
                        </div>
                    </td>
                    <td>Rp. 20.000</td>
                    <td>Rp. 20.000</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Delivery & Payment Options -->
    <section class="p-4">
        <div class="row">
            <!-- Delivery Option -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h6>Tambah Catatan:</h6>
                    <textarea name="catatan" placeholder="lorem ipsum" class="form-control"></textarea>
                </div>
            </div>
            <!-- Payment Method -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h6>Metode Pembayaran</h6>
                    <div>
                        <input type="radio" name="paymentMethod" id="bankTransfer" checked>
                        <label for="bankTransfer">Transfer Bank</label>
                    </div>
                    <div>
                        <input type="radio" name="paymentMethod" id="eWallet">
                        <label for="eWallet">E-Wallet</label>
                    </div>
                    <div>
                        <input type="radio" name="paymentMethod" id="cod">
                        <label for="cod">Bayar Di Tempat (Cash)</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Summary Section -->
    <section class="p-4">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Total Pesanan :</span>
                    <span></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="d-flex justify-content-between">
                        <span>Subtotal Produk :</span>
                        <span></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Biaya Layanan :</span>
                        <span>Rp. 1.000</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Total Pembayaran :</span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Button -->
    <section class="p-4 text-center">
        <a href="/bayar" class="btn btn-primary w-100">Pesan Sekarang</a>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>


