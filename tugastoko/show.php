<?php
include 'database.php';
$toko = new Toko();
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
    <?php 
    foreach ($toko->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama_produk'];
        $kategori = $data['kategori_produk'];
        $jumlah = $data['jumlah_produk'];
        $harga = $data['harga_produk'];
        $deskripsi = $data['deskripsi_produk'];
        $sub_total = $data['sub_total'];
    }
    ?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">
            <?= $nama?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-id-card-o fa-lg"> Lihat Data</i></a>
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





    <!-- <div class="container-fluid">
        <div class="row row-md-8 ">
            <div class="col-md-8 mx-auto">
                <div class="card justify-content-center">
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post">
                            <input type="hidden" name="id" value="<?= $id;?>">
                            <div class="form-group">
                                <label>Nama </label>
                                <input class="form-control" type="text" value="<?= $nama;?>" name="nama" readonly>
                            </div>

                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea class="form-control" name="alamat" name="alamat" id="" cols="10" rows="5"
                                    readonly><?= $deskripsi;?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="number" name="date" value="<?= $jumlah;?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin : </label>
                                <div class="form-check-inline ">
                                    <label class="form-check-label form-control">
                                        <input type="radio" class="form-check-input" value="laki-laki" name="kelamin" <?php if ($jk == "laki-laki") {
                                                    ?>checked<?php }?>>Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label form-control">
                                        <input type="radio" class="form-check-input" value="perempuan" name="kelamin" <?php if ($jk == "perempuan") {
                                                    ?>checked<?php }?>>Perempuan
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control" id="">
                                        <option value="Muslim" <?php if ($agama == "Muslim") {
                                                    ?>selected<?php }?>>Muslim</option>
                                        <option value="Kristen" <?php if ($agama == "Kristen") {
                                                    ?>selected<?php }?>>Kristen</option>
                                        <option value="Hindu" <?php if ($agama == "Hindu") {
                                                    ?>selected<?php }?>>Hindu</option>
                                        <option value="Buddha" <?php if ($agama == "Buddha") {
                                                    ?>selected<?php }?>>Buddha</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form> -->
    <div class="container-fluid">
        <div class="row row-md-8 ">
            <div class="col-md-8 mx-auto">
                <div class="card justify-content-center">
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $id;?>">
                                <label>Nama Produk</label>
                                <input class="form-control" type="text" value="<?= $nama;?>" name="nama" id="" readonly>
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <input class="form-control" type="text" value="<?= $kategori;?>" name="nama" id=""
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label>Jumlah Produk</label>
                                <input class="form-control" type="number" min=1 name="jumlah" value="<?= $jumlah;?>"
                                    id="" readonly>
                            </div>

                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input class="form-control" type="number" min=1 name="harga" value="<?= $harga;?>" id=""
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea class="form-control" name="deskripsi" id="" readonly cols="10"
                                    rows="5"><?= $deskripsi;?></textarea>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>


    </fieldset>
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>