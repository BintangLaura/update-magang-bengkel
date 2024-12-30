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
     <link href="{{ asset('assets-bengkel/lib/animate/animate.min.css')}}" rel="stylesheet">
     <link href="{{ asset('assets-bengkel/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{ asset('assets-bengkel/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('assets-bengkel/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card">
            <div class="card card-success">
                <div class="card-header">
                    <center><h5 class="card-title">Tambah Data Produk</h5></center>
                </div>
                <div class="card-body">
                    <form action="/product/store" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                          <div class="card-body">
                          <div class="form-group">
                              <label>Kode Produk</label>
                              <input type="text" class="form-control" placeholder="Masukkan Kode Produk" name="product_code">
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
                              <input type="text" class="form-control" placeholder="Masukkan Harga Produk" name="harga">
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
                          <div class="row">
                            <div class="col text-center">
                                <button type="button" class="btn btn-blok btn-danger btn-lg-3" onclick="history.go(-1);">Batal</button>
                                <button type="submit" class="btn btn-blok btn-info btn-lg-3" value="">Simpan Data</button>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
