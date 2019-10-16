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
    <!-- <fieldset>
        <legend>Input Data Siswa</legend>
        <form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required></td>
                </tr>

                <tr>
                    <th>alamat siswa</th>
                    <td><textarea name="alamat" id="" cols="40"></textarea></td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl" required></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jk" value="laki-laki">Laki-laki</td>
                    <td><input type="radio" name="jk" value="perempuan">Perempuan</td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <td><select name="agama" id="">
                            <option value="Muslim">Muslim</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select></td>
                </tr>

                <tr>
                    <th><input type="submit" value="Simpan" name="save"></th>
                </tr>
            </table>
        </form>
    </fieldset> -->


    <div class="container-fluid">
        <div class="row row-md-12 ">
            <div class="col-md-8 mx-auto">
                <div class="card justify-content-center">
                    <div class="card-header text-center">
                        <h2>Biodata</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label>Nama </label>
                                <input class="form-control" type="text" name="nama" id="">
                            </div>

                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea class="form-control" name="alamat" name="alamat" id="" cols="10"
                                    rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl" id="">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin : </label>
                                <div class="form-check-inline form-control">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="laki-laki"
                                            name="jk">Laki-Laki
                                    </label>
                                </div>


                                <div class="form-check-inline">
                                    <label class="form-check-label form-control">
                                        <input type="radio" class="form-check-input" value="perempuan"
                                            name="jk">Perempuan
                                    </label>
                                </div>


                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control" id="">
                                        <option value="Muslim">Muslim</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                    </select>
                                </div>
                                <input type="submit" value="Simpan" class="btn btn-outline-primary" name="save">
                                <input type="reset" value="Reset" class="btn btn-outline-warning">
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>


        <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
        <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
        <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>