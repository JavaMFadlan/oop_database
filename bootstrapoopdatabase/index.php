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
    <link rel="stylesheet" href="/bootstrapoopdatabase/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Data Siswa</h1>
    </center>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>tanggal lahir</th>
                <th>agama</th>
                <th>umur</th>
                <center>
                    <th colspan="3">Aksi</th>
                </center>
            </tr>
        </thead>
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
                    <input type="submit" class="btn btn-outline-primary" value="Lihat"></a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">
                    <input type="submit" class="btn btn-outline-warning" value="Edit"></a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">
                    <input type="submit" class="btn btn-outline-danger" value="Delete"></a></td>
        </tr>
        <?php }?>
    </table>
    <a href="/bootstrapoopdatabase/create.php">
        <input type="submit" class="btn btn-primary" value="Buat"></a>
    </fieldset>

    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>