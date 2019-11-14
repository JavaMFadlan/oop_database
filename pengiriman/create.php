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


    <nav class="navbar navbar-expand-lg " style="background-color: #fc8803;">
        <a class="navbar-brand text-black"><i class="fa fa-plus fa-lg"> Data Pengiriman</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled></a>
                </li>
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


    <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row row-md-6 ">
                <div class="col-sm-6">
                    <h1 class="card-title text-center">Data Pengirim</h1>
                    <div class="card justify-content-center">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input class="form-control" type="text" name="nama" id="" required>
                            </div>
                            <div class="form-group">
                                <label>kota</label>
                                <input class="form-control" type="text" name="kota" id="" required>
                            </div>

                            <div class="form-group">
                                <label>kode pos</label>
                                <input class="form-control" type="number" name="kode_pos" id="" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 class="card-title text-center">Data Penerima</h1>
                    <div class="card justify-content-center">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama penerima</label>
                                <input class="form-control" type="text" name="nama_penerima" id="" required>
                            </div>
                            <div class="form-group">
                                <label>kota penerima</label>
                                <input class="form-control" type="text" name="kota_penerima" id="" required>
                            </div>

                            <div class="form-group">
                                <label>kode pos penerima</label>
                                <input class="form-control" type="number" name="kode_pos_penerima" id="" required>
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
                                <label>Nama Barang</label>
                                <input class="form-control" type="text" name="nama_barang" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Berat Barang</label>
                                <input class="form-control" type="number" min="1" name="berat_barang" id="" required>
                            </div>

                            <div class="form-group">
                                <label>foto</label>
                                <input class="form-control" type="file" name="foto_barang" id="" required>
                            </div>

                            <div class="form-group">
                                <label>tipe</label>
                                <select name="id_tipe" class="form-control" required id="">
                                    <?php
                                    $query = $tipe->type();
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                    <option value="<?=$data['id_tipe']?>"> <?= $data['tipe']?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Layanan</label>
                                <select name="id_layanan" class="form-control" required id="">
                                    <?php
                                    $query1 = $layanan->layan();
                                    while ($data = mysqli_fetch_array($query1)) {
                                        ?>
                                    <option value="<?=$data['id_layanan']?>"><?= $data['layanan']?></option>
                                    <?php
                                    }
                                    ?>
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
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php }else {
    header("location:login.php");    
}?>