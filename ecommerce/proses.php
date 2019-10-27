<?php
include 'database.php';
$ecommerce = new Ecommerce();

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $kategori_barang = $_POST['kategori'];
    $jumlah_barang = $_POST['jumlah'];
    $harga_barang = $_POST['harga'];
	$deskripsi_barang = $_POST['deskripsi'];
	$namaFo = $_FILES['foto'];
    $sub_total = $jumlah_barang*$harga_barang;
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
    $ecommerce->create($nama_barang, $kategori_barang, $jumlah_barang, $harga_barang, $deskripsi_barang, $foto_barang, $sub_total);
        header("location:index.php");
}


elseif($aksi == "update"){
	$data = $ecommerce->edit($id);
	$fotol = mysqli_fetch_array($data);
	$path = "img/".$fotol['foto_barang'];
    if ($namaFo['error']==4) {
			$foto_barang = $fotol['foto_barang'];
		}
		else{
			unlink($path);
			$foto_barang = upload($namaFo);
		}
		
    $ecommerce->update($id, $nama_barang, $kategori_barang, $jumlah_barang, $harga_barang,$deskripsi_barang,$foto_barang, $sub_total);
    header("location:index.php");
}


elseif($aksi == "delete"){
	$data = $ecommerce->edit($_GET['id']);
	$fotol = mysqli_fetch_array($data);
	$path = "img/".$fotol['foto_barang'];
	unlink($path);
    $ecommerce->delete($_GET['id']);
    header("location:index.php");
}
?>