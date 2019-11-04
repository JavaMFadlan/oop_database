<?php
include 'database.php';

$aksi = $_GET['aksi'];
$id = $_GET['id'];

if (isset($_POST['save'])) {
	// id
	$id_pengiriman = $_POST['id_pengiriman'];
	$id_pengirim = $_POST['id_pengirim'];
	$id_penerima = $_POST['id_penerima'];
	$id_barang1 = $_POST['id_barang'];
	$id_layanan = $_POST['id_layanan'];
	
	
	
	// pegirim
	$nama = $_POST['nama'];
	$kota = $_POST['kota'];
	$kode_pos = $_POST['kode_pos'];
	
	
	// penerima
	$nama_penerima = $_POST['nama_penerima'];
	$kota_penerima = $_POST['kota_penerima'];
	$kode_pos_penerima = $_POST['kode_pos_penerima'];

	// barang
	$id_tipe = $_POST['id_tipe'];
	$nama_barang= $_POST['nama_barang'];
	$berat_barang= $_POST['berat_barang'];
	$namaFo = $_FILES['foto_barang'];
}

function upload($foto){

$namaF = $foto['name'];
$ukuranF= $foto['size'];
$error = $foto['error'];
$tmpName= $foto['tmp_name'];
$tempat='img/';

// $namaF = $foto['name'];
// $ukuranF= $foto['size'];
// $error = $foto['error'];
// $tmpName= $foto['tmp_name'];
// $tempat='img/';
// berguna untuk mengambil nama foto, ukuran, error, dan temporary nama
if ( $error === 4 ) {
	// error 4 berarti data tak ada
return false;
}

$valid = ['jpg','jpeg','png'];
$ekstensi = explode('.', $namaF);
$ekstensi = strtolower(end($ekstensi));

if (!in_array($ekstensi, $valid)) {
	// jika ektensi file bukan jpg,png atau jpeg maka akan di return false atau gambar tak masuk
return false;
}

if ( $ukuranF > 2000000) {
// jika ukuran terlalu besar maka akan di return false atau gambar tak masuk
return false;
}

$namaFB = uniqid();
$namaFB .= '.';
$namaFB .= $ekstensi;
// uniqid akan menghasilkan sebuah nama random lalu digabung dengan titik(.) dan digabung lagi dengan ektensi file
move_uploaded_file($tmpName,$tempat.$namaFB);
// temporary name akan dipindahkan ke tempat(img/) dengan nama foto baru (namaFB)
return $namaFB;
}

if ($aksi == "tambah"){
$foto_barang = upload($namaFo);
$pengirim->create($nama,$kota,$kode_pos);
$penerima->create($nama_penerima,$kota_penerima,$kode_pos_penerima);
$barang->create($id_tipe,$nama_barang,$berat_barang,$foto_barang);

$sql1 = $pengirim->mencaripengirim();
$sql2 = $penerima->mencaripenerima();
$sql3 = $barang->mencaribarang();

$row1 = mysqli_fetch_array($sql1);
$id_pengirim = $row1['id_pengirim'];
$row2 = mysqli_fetch_array($sql2);
$id_penerima = $row2['id_penerima'];
$row3 = mysqli_fetch_array($sql3);
$id_barang = $row3['id_barang'];
// mysqli_fetch_array mengambil data query dengan bentuk assosiatif dan numeric
$pengiriman->create($id_pengirim,$id_penerima,$id_barang,$id_layanan,$id_tipe);
header("location:index.php");
}






elseif($aksi == "update"){
$data = $barang->edit($id_barang1);
$fotol = mysqli_fetch_assoc($data);
$path = "img/".$fotol['foto'];
if ($namaFo['error']==4) {
$foto_barang = $fotol['foto'];
}
else{
unlink($path);
$foto_barang = upload($namaFo);
}
var_dump($fotol);

$pengirim->update($id_pengirim,$nama,$kota,$kode_pos);
$penerima->update($id_penerima,$nama_penerima,$kota_penerima,$kode_pos_penerima);
$barang->update($id_barang1,$id_tipe,$nama_barang,$berat_barang,$foto_barang);
$pengiriman->update($id_pengiriman,$id_pengirim,$id_penerima,$id_barang1,$id_layanan,$id_tipe);
header("location:index.php");
}




elseif($aksi == "delete"){
$kirim = $pengiriman->edit($id);
$kirim = mysqli_fetch_assoc($kirim);
$data = $barang->edit($id);
$fotol = mysqli_fetch_assoc($data);
// sama seperti mysqli_fetch_array hanya saja assoc akan mengambil data assosiatif saja
$path = "img/".$fotol['foto'];
unlink($path);
$pengirim->delete($kirim['id_pengirim']);
$penerima->delete($kirim['id_penerima']);
$barang->delete($kirim['id_barang']);
$pengiriman->delete($kirim['id_pengiriman']);
header("location:index.php");
}
?>