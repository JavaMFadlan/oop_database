<?php
include 'database.php';
$biodata = new Biodata();

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $time = strtotime($tgl);
    $umur = date('Y')-date('Y',$time);
}
if($aksi == "tambah"){
    $biodata->create($nama, $alamat, $tgl, $jk, $agama, $umur);
    header("location:index.php");
}
elseif($aksi == "update"){
    $biodata->update($id, $nama, $alamat, $tgl, $jk, $agama, $umur);
    header("location:index.php");
}
elseif($aksi == "delete"){
    $biodata->delete($_GET['id']);
    header("location:index.php");
}
?>