<?php
include 'database.php';

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
	// id
	$id_pengiriman = $_POST['id_pengiriman'];
	$id_pengirim = $_POST['id_pengirim'];
	$id_penerima = $_POST['id_penerima'];
	$id_barang = $_POST['id_barang'];
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
	$id_tipe = $_POST['tipe'];
	$nama_barang= $_POST['nama_barang'];
	$berat_barang= $_POST['berat_barang'];
	$namaFo = $_FILES['foto_barang'];
	// var_dump($_POST);?>
<br>
<?php
	

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

		if ( $ukuranF > 2000000) {
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

if ($aksi == "pengirim"){
	$pengirim->create($nama,$kota,$kode_pos);
	header("location:createpenerima.php");
}
elseif ($aksi == "penerima"){
	$penerima->create($nama_penerima,$kota_penerima,$kode_pos_penerima);
	header("location:createbarang.php");
}
elseif ($aksi == "barang"){
	$foto_barang = upload($namaFo);
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
var_dump($id_tipe,$nama_barang,$berat_barang,$foto_barang);
    $pengiriman->create($id_pengirim,$id_penerima,$id_barang,$id_layanan,$id_tipe);
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
$pengirim->update($id_pengirim,$nama_pengirim,$kota_pengirim,$kode_pos_pengirim);
$penerima->update($id_penerima,$nama_penerima,$kota_penerima,$kode_pos_penerima);	
$barang->update($id_barang,$id_tipe,$nama_barang,$berat,$foto_barang);

$pengiriman->update($id_pengiriman,$id_pengirim,$id_penerima,$id_barang,$id_layanan,$id_tipe);
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