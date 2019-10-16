<?php
include '../database.php';
$siswa = new Siswa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($siswa->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
            <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
                <table>
                    <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" value="<?= $nis;?>" read-only></td>
                    </tr>

                    <tr>
                    <th>Alamat Siswa</th>
                    <td><input type="text" name="nama" value="<?= $nama;?>" read-only></td>
                    </tr>

                    <tr>
                    <th>Nama siswa</th>
                    <td><textarea read-only name="alamat" id="" cols="40"><?= $alamat;?></textarea></td>
                    </tr>
                </table>
            </form>
        
    </fieldset>
</body>
</html>