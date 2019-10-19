<?php
include 'database.php';
$db = new Database();
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
                    <a class="" aria-labelledby="dropdownMenu2" href="create.php">
                        <input class="btn btn-outline-success" type="submit" name="" value="Buat"></a>
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
                    <th>Nama</th>
                    <th>jumlah</th>
                    <th>Harga</th>
                    <th>Sub Total</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $toko = new Toko();
            $no = 1;
            foreach($toko->index() as $data) {
                $total += $data['sub_total'];
                if ($data['kategori_produk'] == "Bahan") {
                    $warna= "badge badge-success"; 
                }
                elseif ($data['kategori_produk'] == "Elektronik") {
                    $warna= "badge badge-primary"; 
                }
                elseif ($data['kategori_produk'] == "Kosmetik") {
                    $warna= "badge badge-danger"; 
                }
                elseif ($data['kategori_produk'] == "Pakaian") {
                    $warna= "badge badge-warning"; 
                }
                elseif ($data['kategori_produk'] == "Alat") {
                    $warna= "badge badge-info"; 
                }
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_produk']; ?></td>
                    <td><?php echo $data['jumlah_produk']; ?></td>
                    <td><?php echo "Rp.".number_format($data['harga_produk'],'0',',','.'); ?></td>
                    <td><?php echo "Rp.".number_format($data['sub_total'],'0',',','.'); ?>
                    </td>
                    <td><?php echo $data['deskripsi_produk']; ?></td>
                    <td><span class="<?= $warna?>"><?php echo $data['kategori_produk']; ?></span></td>
                    <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">
                            <input type="submit" class="btn btn-outline-primary" value="Lihat"></a>
                        <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">
                            <input type="submit" class="btn btn-outline-danger" value="Hapus">
                        </a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">
                            <input type="submit" class="btn btn-outline-warning" value="edit">
                        </a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
    </div>
    <div class="card">
        <h4 class="card-title">
            <center>Total Pembayaran</center>
        </h4>
        <div class="card-body">
            <center>
                <?php echo "Rp.".number_format($total,'0',',','.');?>
                <center>
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