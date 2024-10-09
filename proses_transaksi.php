<?php
include "koneksi.php";
session_start();

if ($_POST) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_petugas = $_POST['id_petugas'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $produk = $_POST['produk'];
    $qty = $_POST['qty'];

    // Insert ke tabel transaksi
    $insert_transaksi = mysqli_query($conn, "INSERT INTO transaksi (id_pelanggan, id_petugas, tgl_transaksi) 
                                             VALUES ('$id_pelanggan', '$id_petugas', '$tgl_transaksi')");
    
    if ($insert_transaksi) {
        $id_transaksi = mysqli_insert_id($conn); // Ambil ID transaksi yang baru saja dimasukkan

        // Insert detail transaksi
        foreach ($produk as $key => $id_produk) {
            $jumlah = $qty[$key];
            $insert_detail = mysqli_query($conn, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty) 
                                                  VALUES ('$id_transaksi', '$id_produk', '$jumlah')");
        }

        if ($insert_detail) {
            echo "<script>alert('Transaksi berhasil ditambahkan!');location.href='tampil_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan detail transaksi!');location.href='tambah_transaksi.php';</script>";
        }
    } else {
        echo "<script>alert('Gagal menambahkan transaksi!');location.href='tambah_transaksi.php';</script>";
    }
}
?>
