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
                        <a href="{{ route('mitra.mitra') }}" class="nav-item nav-link active">Produk</a>
                        <a href="{{ route('mitra.kategori') }}" class="nav-item nav-link">Kategori</a>
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

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <a href="/produk/tambah" class="btn btn-primary rounded-pill py-2 px-4"> Tambah Produk </a>
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
                                <a href="/product/edit/{{ $product->id }}" class="btn btn-warning rounded-pill py-2 px-4">Edit</a>
                                <a href="/product/hapus/{{ $product->id }}" class="btn btn-danger rounded-pill py-2 px-4">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Modal Tambah Produk -->
    {{-- menampilkan error validasi --}}

        <!-- Modal Edit Produk -->
        <div class="modal fade" id="editProduk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProdukLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editProdukLabel">Edit Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                              <div class="card-body">
                              <div class="form-group">
                                  <label>Kode Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Kode Produk" name="product_code" readonly>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label>Kategori Produk</label> <br>
                                  <select name="category_id" class="form-control">
                                    <option>-- Pilih Kategori --</option>
                                    <option value="1">Ban</option>
                                    <option value="2">Sparepart</option>
                                    <option value="3">Oli</option>
                                  </select>
                                </div>
                                <br>
                              <div class="form-group">
                                  <label>Nama Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Nama Produk" name="product_name">
                              </div>
                              <br>
                              <div class="form-group">
                                  <label>Deskripsi Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Deskripsi Produk" name="description">
                              </div>
                              <br>
                              <div class="form-group">
                                  <label>Harga Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Harga Produk" name="price">
                              </div>
                              <br>
                              <div class="form-group">
                                  <label>Stok Produk</label>
                                  <input type="text" class="form-control" placeholder="Masukkan Stok Produk" name="stock">
                              </div>
                              <br>
                              <div class="form-group">
                                  <label>Upload Gambar Produk</label>
                                  <input type="file" class="form-control" placeholder="Masukkan Gambar Produk" name="image">
                              </div>
                              <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secodary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
         </div>
        <!-- End Modal Edit Produk-->

        <!-- Modal Hapus Produk -->
         <div class="modal fade" id="hapusProduk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="hapusProdukLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahProdukLabel">Hapus Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus Produk?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secodary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
         </div>
        <!-- End Modal Hapus Produk-->
    {{-- <h1> Ini Halaman Produk</h1>

    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 position-right">Tambah Produk</a> --}}

    {{-- @foreach ($products as $p)
    @endforeach --}}
    <div class="card"></div>

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
