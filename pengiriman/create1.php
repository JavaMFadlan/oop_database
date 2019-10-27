<?php 
if (isset($_POST['save'])) {
    $nama_pengirim = $_POST['nama'];
	$alamat_pengirim = $_POST['alamat'];
	$kategori_barang = $_POST['kategori_barang'];
	$nama_barang = $_POST['nama_barang'];
	$berat_barang = $_POST['berat_barang'];
	$layanan = $_POST['layanan'];
	$no_pengirim = $_POST['nomor'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrapoopdatabase/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">Biodata</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-user-plus fa-lg"> Buat Produk</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="index.php">
                        <input class="btn btn-outline-success" type="submit" value="Masuk Index"></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>




    <div class="container-fluid">
        <div class="row row-md-8 ">
            <div class="col-md-8 mx-auto">
                <div class="card justify-content-center">
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">


                            <input type="hidden" name="nama" value="<?= $nama_pengirim?>">
                            <input type="hidden" name="alamat" value="<?= $alamat_pengirim?>">
                            <input type="hidden" name="kategori_barang" value="<?= $kategori_barang?>">
                            <input type="hidden" name="nama_barang" value="<?= $nama_pengirim?>">
                            <input type="hidden" name="berat_barang" value="<?= $berat_barang?>">
                            <input type="hidden" name="layanan" value="<?= $layanan?>">
                            <input type="hidden" name="nomor" value="<?= $no_pengirim?>">
                            <input type="submit" value="Simpan" class="btn btn-outline-primary" name="save">
                            <input type="reset" value="Reset" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>