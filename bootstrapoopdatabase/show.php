<?php
include 'database.php';
$biodata = new Biodata();
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
    <?php 
    foreach ($biodata->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tgl = $data['tgl_lahir'];
        $jk = $data['jk'];
        $agama = $data['agama'];
        $umur = $data['umur'];
    }
    ?>
    <div class="container-fluid">
        <div class="row row-md-12 ">
            <div class="col-md-8 mx-auto">
                <div class="card justify-content-center">
                    <div class="card-header text-center">
                        <h2>Lihat Data Siswa</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post">
                            <input type="hidden" name="id" value="<?= $id;?>">
                            <div class="form-group">
                                <label>Nama </label>
                                <input class="form-control" type="text" value="<?= $nama;?>" name="nama">
                            </div>

                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea class="form-control" name="alamat" name="alamat" id="" cols="10"
                                    rows="5"><?= $alamat;?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="date" value="<?= $tgl;?>">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin : </label>
                                <div class="form-check-inline form-control">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="laki-laki" name="kelamin" <?php if ($jk == "laki-laki") {
                                                    ?>checked<?php }?>>Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label form-control">
                                        <input type="radio" class="form-check-input" value="perempuan" name="kelamin" <?php if ($jk == "perempuan") {
                                                    ?>checked<?php }?>>Perempuan
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control" id="">
                                        <option value="Muslim" <?php if ($agama == "Muslim") {
                                                    ?>selected<?php }?>>Muslim</option>
                                        <option value="Kristen" <?php if ($agama == "Kristen") {
                                                    ?>selected<?php }?>>Kristen</option>
                                        <option value="Hindu" <?php if ($agama == "Hindu") {
                                                    ?>selected<?php }?>>Hindu</option>
                                        <option value="Buddha" <?php if ($agama == "Buddha") {
                                                    ?>selected<?php }?>>Buddha</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

        </fieldset>
        <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
        <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
        <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>