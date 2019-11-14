<?php
session_start();
include 'database.php';
if ($_SESSION['user']) {
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
    while ($data = mysqli_fetch_assoc($join->wherejoin($_GET['id']))) {
        $idpengiriman = $data['id_pengiriman'];
        $idpengirim = $data['id_pengirim'];
        $idpenerima = $data['id_penerima'];
        $idbarang = $data['id_barang'];
        $idlayanan = $data['id_layanan'];
        $idtipe = $data['id_tipe'];
    break; }
    ?>

    <nav class="navbar navbar-expand-lg " style="background-color: #fc8803;">
        <a class="navbar-brand text-black"><i class="fa fa-pencil-square-o fa-lg"> Edit Data</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="index.php">
                        <input class="btn btn-dark" type="submit" value="Index"></a>
                </li>
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php">
                        <input class="btn btn-danger" type="submit" value="logout"></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>




    <form action="proses.php?aksi=update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pengiriman" value="<?= $idpengiriman;?>">
        <input type="hidden" name="id_penerima" value="<?= $idpenerima;?>">
        <input type="hidden" name="id_pengirim" value="<?= $idpengirim;?>">
        <input type="hidden" name="id_barang" value="<?= $idbarang;?>">
        <div class="container">
            <div class="row row-md-6 ">
                <div class="col-sm-6">
                    <h1 class="card-title text-center">Data Pengirim</h1>
                    <div class="card justify-content-center">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input class="form-control" type="text" value="<?= $data['nama_pengirim'];?>"
                                    name="nama" id="" required>
                            </div>
                            <div class="form-group">
                                <label>kota Pengirim</label>
                                <input class="form-control" type="text" value="<?= $data['kota_pengirim'];?>"
                                    name="kota" id="" required>
                            </div>
                            <div class="form-group">
                                <label>Kode Pengirim</label>
                                <input class="form-control" type="text" value="<?= $data['kode_pos_pengirim'];?>"
                                    name="kode_pos" id="" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 class="card-title text-center">Data Penerima</h1>
                    <div class="card justify-content-center">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <input class="form-control" type="text" value="<?= $data['nama_penerima'];?>"
                                    name="nama_penerima" id="" required>
                            </div>
                            <div class="form-group">
                                <label>kota Penerima</label>
                                <input class="form-control" type="text" value="<?= $data['kota_penerima'];?>"
                                    name="kota_penerima" id="" required>
                            </div>
                            <div class="form-group">
                                <label>Kode Penerima</label>
                                <input class="form-control" type="text" value="<?= $data['kode_pos_penerima'];?>"
                                    name="kode_pos_penerima" id="" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row-md-8 ">
                <div class="col-md-8 mx-auto">
                    <h1 class="card-title text-center">Data Barang</h1>
                    <div class="card justify-content-center">
                        <div class="card-body">

                            <div class="form-group">
                                <label>Nama barang</label>
                                <input class="form-control" type="text" value="<?= $data['nama_barang'];?>"
                                    name="nama_barang" id="" required>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                <select name="id_tipe" class="form-control" required id="">
                                    <option value="1" <?php if ($idtipe== 1) {?>selected<?php }?>>
                                        Dokumen
                                    </option>
                                    <option value="2" <?php if ($idtipe == 2) {?>selected<?php }?>>
                                        Paket
                                    </option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>berat barang</label>
                                <input class="form-control" type="text" value="<?= $data['berat'];?>"
                                    name="berat_barang" id="" required>
                            </div>

                            <div class="form-group">
                                <label>foto</label>
                                <input class="form-control" type="file" name="foto_barang" id="">
                                <img class="form-control-file" src="img/<?= $data['foto']?>" width="200px">
                            </div>

                            <div class="form-group">
                                <label>Layanan</label>
                                <select name="id_layanan" class="form-control" required id="">
                                    <option value="1" <?php if ($idlayanan == 1) {?>selected<?php }?>>
                                        SS
                                    </option>
                                    <option value="2" <?php if ($idlayanan == 2) {?>selected<?php }?>>
                                        YES
                                    </option>
                                    <option value="3" <?php if ($idlayanan == 3) {?>selected<?php }?>>
                                        REG
                                    </option>
                                    <option value="4" <?php if ($idlayanan == 4) {?>selected<?php }?>>
                                        OKE
                                    </option>
                                </select>
                            </div>


                            <input type="submit" value="Simpan" class="btn btn-outline-primary" name="save">
                            <input type="reset" value="Reset" class="btn btn-outline-warning">
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
<?php }else {
    header("location:login.php");
}
?>