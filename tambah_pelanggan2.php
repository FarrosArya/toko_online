<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
          <h3 class="text-white">Pendaftaran Pelanggan Baru</h3>

          <!-- Form dengan enctype="multipart/form-data" untuk mendukung file upload -->
          <form id="registerForm" action="proses_tambah_pelanggan2.php" method="post" enctype="multipart/form-data">

            <div class="card" style="border-radius: 15px;">
              <div class="card-body">

                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Nama Lengkap</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" />
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">No Telepon</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="text" id="telp" name="telp" class="form-control" placeholder="Masukkan Nomor Aktif" />
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Alamat</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <textarea type="text" id="alamat" name="alamat" class="form-control"
                      placeholder="Masukkan Alamat Lengkap"></textarea>
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Username</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Buat Username">
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Buat Password</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="password" id="password" name="password" class="form-control"
                      placeholder="Masukkan Password yang Kuat">
                  </div>
                </div>

                <!-- Input untuk foto -->
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Masukkan Foto Anda</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <label for="fotoPelanggan" class="form-label"></label>
                    <input type="file" id="fotoPelanggan" name="foto" class="form-control">
                  </div>
                </div>

                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Kirim
                  Formulir</button>

              </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
              crossorigin="anonymous"></script>
        </div>
      </div>
    </div>
</section>