<?php 
include "koneksi.php";
include "header_admin.php";

// Ambil id_pelanggan dari URL
$id_pelanggan = $_GET['id_pelanggan'];

// Query untuk mengambil data pelanggan berdasarkan id_pelanggan
$qry_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");
$data_pelanggan = mysqli_fetch_array($qry_pelanggan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ubah Pelanggan</title>
</head>
<body>
<div class="container">
    <h3 class="text-center my-4">Ubah Data Pelanggan</h3>
    <form action="proses_ubah_pelanggan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pelanggan" value="<?= $data_pelanggan['id_pelanggan'] ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $data_pelanggan['nama'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $data_pelanggan['username'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required><?= $data_pelanggan['alamat'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="telp" class="form-label">No Telepon</label>
            <input type="text" name="telp" id="telp" class="form-control" value="<?= $data_pelanggan['telp'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto Pelanggan (Biarkan kosong jika tidak ingin diubah)</label>
            <input type="file" name="foto" id="foto" class="form-control">
            <img src="assets/foto/<?= $data_pelanggan['foto'] ?>" alt="Foto Pelanggan" width="100" class="mt-3">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password Baru (Biarkan kosong jika tidak ingin diubah)</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Ubah Pelanggan</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
