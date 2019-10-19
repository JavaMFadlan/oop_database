<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrapoopdatabase/assets/css/bootstrap.min.css">
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
                    <a class="nav-link" disabled><i class="fa fa-user-plus fa-lg"> Buat Baru</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="/bootstrapoopdatabase/index.php">
                        <input class="btn btn-outline-success" type="submit" value="Masuk Index"></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>




    <div class="container-fluid">
        <div class="row row-md-8 ">
            <div class="col-md-8 mx-auto">
                <div class="card justify-content-center">
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label>Nama </label>
                                <input class="form-control" type="text" name="nama" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea class="form-control" name="alamat" name="alamat" id="" required cols="10"
                                    rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin : </label>
                                <div class="form-check-inline ">
                                    <label class="form-check-label form-control">
                                        <input type="radio" class="form-check-input" value="laki-laki" name="jk"
                                            required>Laki-Laki
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label form-control">
                                        <input type="radio" class="form-check-input" required value="perempuan"
                                            name="jk">Perempuan
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control" required id="">
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