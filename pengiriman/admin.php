<?php
session_start();
include 'database.php';
if ($_SESSION['user']=="admin") {
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

    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">Toko</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-address-book fa-lg"> Daftar</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php">
                        <input class="btn btn-outline-danger" type="submit" value="logout"></a>
                </li>
            </ul>

        </div>
        </div>
    </nav>

    <div class="container-fluid mt-5 mb-5">
        <table class="table" id="har">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>id Pengiriman</th>
                    <th>nama Pengirim</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $no = 1;
            $query= $join->adminjoin();
            while ($data = mysqli_fetch_assoc($query)) {
?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="img/<?= $data['foto']; ?>" width="50px" alt=""></td>
                    <td><?php echo $data['id_pengiriman']; ?></td>
                    <td><?php echo $data['nama_pengirim']; ?></td>
                    <td><?php echo $data['kota_penerima']; ?></td>
                    <td><a href="proses.php?id=<?=$data['id_pengiriman']; ?>&aksi=ganti">
                            <input type="submit" class="btn btn-success" value="Kirim">
                        </a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>




    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>


</body>
<script>
$(document).ready(function() {
    $('#har').DataTable();
});
</script>

</html>
<?php }else {
    header("location:login.php");
}?>