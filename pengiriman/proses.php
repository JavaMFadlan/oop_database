<?php
include 'database.php';
$pengiriman = new Pengiriman();

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
    $id = $_POST['id'];
	$nama_pengirim = $_POST['nama'];
	$alamat_pengirim = $_POST['alamat'];
	$nama_barang = $_POST['nama_barang'];
	$berat_barang = $_POST['berat_barang'];
	$layanan = $_POST['layanan'];
	$no_pengirim = $_POST['nomor'];


	$nama_penerima = $_POST['nama_penerima'];
	$alamat_penerima = $_POST['alamat_penerima'];
	$kode_pos = $_POST['kode'];

	$namaFo = $_FILES['foto_barang'];
}

    function upload($foto){
		
		$namaF = $foto['name'];
		$ukuranF= $foto['size'];
		$error = $foto['error'];
		$tmpName= $foto['tmp_name'];
		$tempat='img/';

		if ( $error === 4 ) {
			echo "<script>
			alert('Pilih Gambar Terlebih Dahulu');
			</script>";
			return false;
		}

		$valid = ['jpg','jpeg','png'];
		$ekstensi = explode('.', $namaF);
		$ekstensi = strtolower(end($ekstensi));
		
		if (!in_array($ekstensi, $valid)) {
			echo "<script>
			alert('Harus Gambar');
			</script>";
			return false;
		}

		if ( $ukuranF > 1000000) {
			echo "<script>
			alert('Ukuran Terlalu Besar');
			</script>";
			return false;
		}

		$namaFB = uniqid();
		$namaFB .= '.';
		$namaFB .= $ekstensi;
		
		if ( $error === 4 ) {
			echo mysqli_error;
			return false;
		}
		move_uploaded_file($tmpName,$tempat.$namaFB);
		
		return $namaFB;
	}

if($aksi == "tambah"){
	$foto_barang = upload($namaFo);
    $pengiriman->create($nama_pengirim,$alamat_pengirim,$nama_barang,$berat_barang,$foto_barang,$layanan,$no_pengirim,$nama_penerima,$alamat_penerima,$kode_pos);
        header("location:index.php");
}


elseif($aksi == "update"){
	$data = $pengiriman->edit($id);
	$fotol = mysqli_fetch_array($data);
	$path = "img/".$fotol['foto_barang'];
    if ($namaFo['error']==4) {
			$foto_barang = $fotol['foto_barang'];
		}
		else{
			unlink($path);
			$foto_barang = upload($namaFo);
		}
		
    $pengiriman->update($id, $nama_pengirim,$alamat_pengirim,$nama_barang,$berat_barang,$foto_barang,$layanan,$no_pengirim,$nama_penerima,$alamat_penerima,$kode_pos);
    header("location:index.php");
}


elseif($aksi == "delete"){
	$data = $pengiriman->edit($_GET['id']);
	$fotol = mysqli_fetch_array($data);
	$path = "img/".$fotol['foto_barang'];
	unlink($path);
    $pengiriman->delete($_GET['id']);
    header("location:index.php");
}
?>