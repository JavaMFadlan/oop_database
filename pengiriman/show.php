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



    <div class="container-fluid">
        <div class="row row-md-12 ">
            <div class="col-md-12 mx-auto mt-5">
                <div class="card justify-content-center">
                    <div class="card-body">
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
                                        <p>Nama : <?=$data['nama_pengirim']?></p>
                                        <p>Kota : <?=$data['kota_pengirim']?></p>
                                        <p>Kode Pos : <?=$data['kode_pos_pengirim']?></p>

                                    </div>
                                </div>
                                <div class="collapse" id="datapenerima">
                                    <div class="card card-body">
                                        <p>Nama : <?=$data['nama_penerima']?></p>
                                        <p>Kota : <?=$data['kota_penerima']?></p>
                                        <p>Kode Pos : <?=$data['kode_pos_penerima']?></p>

                                    </div>
                                </div>

                                <div class="collapse" id="databarang">
                                    <div class="card card-body">
                                        <p>Nama Barang : <?=$data['nama_barang']?></p>
                                        <p>berat Barang : <?=$data['berat']?></p>
                                        <p>Layanan Barang : <?=$data['layanan']?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 order-md-1">
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