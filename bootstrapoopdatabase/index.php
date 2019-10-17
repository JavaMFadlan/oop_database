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
        <a class="navbar-brand text-white">Biodata</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-address-book fa-lg"> Data Siswa</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="/bootstrapoopdatabase/create.php">
                        <input class="btn btn-outline-success" type="submit" name="" value="Buat"></a>
                </li>
            </ul>

        </div>
        </div>
    </nav>

    <div class="container-fluid mt-5 mb-5">
        <table class="table" id="har">
            <thead class="thead-dark ">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>tanggal lahir</th>
                    <th>agama</th>
                    <th>umur</th>
                    <th>Aksi</th>

                </tr>
            </thead>

            <tbody>
                <?php
            $biodata = new Biodata();
            $no = 1;
            foreach($biodata->index() as $data) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['umur']; ?></td>
                    <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">
                            <input type="submit" class="btn btn-outline-primary" value="Lihat"></a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">
                            <input type="submit" class="btn btn-outline-warning" value="Edit"></a>
                        <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">
                            <input type="submit" class="btn btn-outline-danger" value="Hapus">
                        </a>
                    </td>
                </tr>
                <?php }?> </tbody>
        </table>
    </div>
    <script src="assets/js/bootstrap.bundle.js">
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>


</body>
<script>
$(document).ready(function() {
    $('#har').DataTable();
});
</script>

</html>