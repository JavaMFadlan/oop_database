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
    foreach ($siswa->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?= $id;?>">
            <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" value="<?php echo $nis;?>" required></td>
                </tr>

                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?= $nama;?>" required></td>
                </tr>

                <tr>
                    <th>Alamat siswa</th>
                    <td><textarea name="alamat" id="" cols="40" required><?= $alamat;?></textarea></td>
                </tr>

                <tr>
                    <th><input type="submit" value="Simpan" name="save"></th>
                </tr>
            </table>
        </form>

    </fieldset>
</body>

</html>