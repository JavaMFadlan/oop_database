<?php
session_start();
include 'database.php';
if ($_SESSION['user']) {
    if (isset($_POST['bayar'])) {
        $id_pengiriman = $_POST['id_pengiriman'];
        $id_barang = $_POST['id_barang'];
        $id_pengirim = $_POST['id_pengirim'];
        $id_penerima = $_POST['id_penerima'];
        $status = $_POST['status'];
        $_SESSION['bayar'] = $_POST['bayar'];
        // var_dump($id_pengiriman,$id_barang,$id_pengirim,$id_penerima,$status);
            for ($i=0; $i < count($id_pengiriman); $i++) { 
            // $periksa1 = $pengiriman->edit($id_pengiriman);
            $periksa = $admin->periksa($id_pengiriman);
            // $data1 = mysqli_fetch_assoc($periksa1);
            
            $data = mysqli_fetch_assoc($periksa);
            if (!$data['id_pengiriman']) {
                if ($status[$i] == "Terkirim") {
                    continue;
                }   
                elseif ($status[$i] != "Terkirim") {
                    $admin->create($id_pengiriman[$i],$id_barang[$i],$id_pengirim[$i],$id_penerima[$i]);
                }
            }
            else {
                break;
            }
        }
        $total= $_POST['total'];
        $total1= $_POST['total1'];
        $kembalian= $total1-$total;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <title>Pembayaran</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #fc8803;">
        <a class="navbar-brand text-white">Pembayaran</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php">
                        <input class="btn btn-dark" type="submit" value="logout"></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-sm-4"></div>
        <div class="mx-auto justify-content-center col-sm-4" style="margin-top:125px;">
            <div class="card border-success text-center" style="width: 25rem;">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        Terima Kasih, Ini Kembalian : <?php  echo "Rp.".number_format($kembalian,0,",",".");?>
                    </div>
                    <a href="index.php"><input type="submit" value="Ulang" class="btn btn-primary" name="ulang"></a>
                    <input type="submit" value="Tidak" class="btn btn-danger" data-toggle="collapse"
                        data-target="#tidak" aria-expanded="false" aria-controls="collapseExample">
                    <div class="collapse" id="tidak">
                        <div class="card card-body">
                            <div id="terima" class="alert alert-success" role="alert">
                                Terima Kasih
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
</body>


</html>
<?php }
}
    else {
    header("location:login.php");
}?>