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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg " style="background-color: #fc8803;">
        <a class="navbar-brand text-black"><i class="fa fa-database fa-lg"> Data Kiriman</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <?php $query= $join->userjoin($_SESSION['user']);
            while ($data = mysqli_fetch_assoc($query)) {
                if ($data['status'] == "Belum Terkirim" || !$_SESSION['bayar'] ) {
                ?>
                <li>
                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        Total
                    </button>
                </li>
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="create.php">
                        <input class="btn btn-success" type="submit" name="" value="Buat"></a>
                </li>
                <li>
                    <?php } break;}?>

                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php">
                        <input class="btn btn-danger" type="submit" value="logout"></a>
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
                    <th>Nama Barang</th>
                    <th>Tipe</th>
                    <th>Layanan</th>
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Tujuan</th>
                    <th>status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $no = 1;
            $query= $join->userjoin($_SESSION['user']);
            while ($data = mysqli_fetch_assoc($query)) {
                $diskon = $data['harga'] * 0.10 * $data['berat'];
                $hasil2 = $data['harga']*$data['berat']-$diskon;    
                if ($data['status']== "Belum Terkirim" ) {
                                $hasil1 += $hasil2;
                }
                else {
                    $hasil2 = $hasil2;
                }
                
?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="img/<?= $data['foto']; ?>" width="50px" alt=""></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['tipe']; ?></td>
                    <td><?php echo $data['layanan']; ?></td>
                    <td><?php echo $data['berat']?></td>
                    <td><?php echo "Rp.".number_format($hasil2,'0',',','.'); ?></td>
                    <td><?php echo $data['kota_penerima'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><a href="show.php?id=<?php echo $data['id_pengiriman']; ?>&aksi=show">
                            <input type="submit" class="btn btn-primary" value="Lihat"></a>
                        <a href="proses.php?id=<?php echo $data['id_pengiriman']; ?>&aksi=delete">
                            <input type="submit" class="btn btn-danger" value="Hapus">
                        </a>
                        <?php if ($data['status'] == "Belum Terkirim") {
                ?>
                        <a href="edit.php?id=<?php echo $data['id_pengiriman']; ?>&aksi=edit">
                            <input type="submit" class="btn btn-warning" value="edit">
                        </a>
                        <?php }?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <div class="card">
                <h4 class="card-title">
                    <center>Total Pembayaran</center>
                </h4>
                <div class="card-body">
                    <center>
                        <?php echo "Rp.".number_format($hasil1,'0',',','.');?>

                        <div class="form-group">
                            <label>Harga Produk</label>
                            <form action="bayar.php" method="post">
                                <?php
                                $query1= $join->userjoin($_SESSION['user']);
                                while ($data1 = mysqli_fetch_assoc($query1)) {?>
                                <input type="hidden" name="id_pengiriman[]" value="<?= $data1['id_pengiriman']?>">
                                <input type="hidden" name="id_barang[]" value="<?= $data1['id_barang']?>">
                                <input type="hidden" name="id_pengirim[]" value="<?= $data1['id_pengirim']?>">
                                <input type="hidden" name="id_penerima[]" value="<?= $data1['id_penerima']?>">
                                <input type="hidden" name="status[]" value="<?= $data1['status']?>">
                                <?php }?>
                                <input type="hidden" name="total" value="<?= $hasil1?>">
                                <input type="hidden" name="bayar" value="bayar">
                                <input class="form-control border-dark rounded-lg col-4" type="number" min=<?= $hasil1?>
                                    name="total1" id="" required>
                                <input onclick="return confirm('Yakin Sudah Semua?')" class="btn btn-outline-success"
                                    type="submit" value="Bayar" name="bayar">

                        </div>
                        </form>
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
<script>
$(document).ready(function() {
    $('#har').DataTable();
});
</script>

</html>
<?php }else {
    header("location:login.php");
}?>