<?php
include 'database.php';
$toko = new Toko();

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama'];
    $kategori_produk = $_POST['kategori'];
    $jumlah_produk = $_POST['jumlah'];
    $harga_produk = $_POST['harga'];
    $deskripsi_produk = $_POST['deskripsi'];
    $sub_total = $jumlah_produk*$harga_produk;
}
if($aksi == "tambah"){
    $toko->create($nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi_produk, $sub_total);
    header("location:index.php");
}
elseif($aksi == "update"){
    $toko->update($id, $nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi_produk, $sub_total);
    header("location:index.php");
}
elseif($aksi == "delete"){
    $toko->delete($_GET['id']);
    header("location:index.php");
}
?>