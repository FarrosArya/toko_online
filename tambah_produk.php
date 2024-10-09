<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk Baru</title>
  <link rel="stylesheet" href="style.css">
  
</head>

<body>

</body>

</html>
<section class="vh-100" style="background-color: #1E90FF;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <div class="container mt-5">
          <h3 class="text-white">Penambahan Produk Baru</h3>
          
          <!-- Form dengan enctype="multipart/form-data" untuk mendukung file upload -->
          <form id="registerForm" action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">

            <div class="card" style="border-radius: 15px;">
              <div class="card-body">

                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Nama Produk</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Nama Produk" />
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Deskripsi</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Beri Deskripsi Produk" />
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Harga</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <textarea type="text" id="harga" name="harga" class="form-control" placeholder="Masukkan Harga Produk"></textarea>
                  </div>
                </div>
                
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Foto Produk</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <label for="fotoProduk" class="form-label"></label>
                    <input type="file" id="fotoProduk" name="foto_produk" class="form-control">
                </div>
                </div>
                
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Tambah Produk</button>
                    
              </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
              integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
              crossorigin="anonymous"></script>
        </div>
      </div>
    </div>
</section>
