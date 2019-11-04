<?php
include 'database.php';
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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>

    <?php 
    while ($data = mysqli_fetch_array($join->wherejoin($_GET['id']))) {
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
                    <a class="nav-link" disabled><i class="fa fa-id-card-o fa-lg"> Lihat
                            Data</i></a>
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
        <div class="row row-md-12 ">
            <div class="col-md-12 mx-auto mt-5">
                <div class="card justify-content-center">
                    <div class="card-body"></div>
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <a class="btn btn-primary" data-toggle="collapse" href="#datapengirim" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Pengirim
                            </a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#datapenerima" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Penerima
                            </a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#databarang" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Barang
                            </a>
                            <div class="collapse" id="datapengirim">
                                <div class="card card-body">
                                    <span class="btn btn-danger col-4">Nama :
                                        <?=$data['nama_pengirim']?>
                                    </span>
                                    <span class="btn btn-danger col-4">Kota :
                                        <?=$data['kota_pengirim']?>
                                    </span>
                                    <span class="btn btn-danger col-4">Kode Pos :
                                        <?=$data['kode_pos_pengirim']?>
                                    </span>

                                </div>
                            </div>
                            <div class="collapse" id="datapenerima">
                                <div class="card card-body">
                                    <span class="btn btn-primary col-4">Nama :
                                        <?=$data['nama_pengirim']?>
                                    </span>
                                    <span class="btn btn-primary col-4">Kota :
                                        <?=$data['kota_pengirim']?>
                                    </span>
                                    <span class="btn btn-primary col-4">Kode Pos :
                                        <?=$data['kode_pos_pengirim']?>
                                    </span>

                                </div>
                            </div>

                            <div class="collapse" id="databarang">
                                <div class="card card-body">
                                    <span class="btn btn-success col-4">Nama Barang :
                                        <?=$data['nama_barang']?>
                                    </span>
                                    <span class="btn btn-success col-4">berat Barang :
                                        <?=$data['berat']?>
                                    </span>
                                    <span class="btn btn-success col-4">Layanan Barang :
                                        <?=$data['layanan']?>
                                    </span>
                                    <span class="btn btn-success col-4">Tipe Barang :
                                        <?=$data['tipe']?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-5 order-md-1">
                            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                src="img/<?= $data['foto']?>" alt="">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <?php break;}
    ?>

    </fieldset>
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>