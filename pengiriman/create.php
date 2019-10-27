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
                    <a class="nav-link" disabled><i class="fa fa-user-plus fa-lg"> Buat Produk</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="index.php">
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
                        <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Pengirim</label>
                                <input class="form-control" type="text" name="nama" id="" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Pengirim</label>
                                <textarea class="form-control" name="alamat" id="" required cols="10"
                                    rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input class="form-control" type="text" name="nama_barang" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Berat Barang</label>
                                <input class="form-control" type="number" min="1" name="Berat Barang" id="" required>
                            </div>

                            <div class="form-group">
                                <label>foto</label>
                                <input class="form-control" type="file" name="foto" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Layanan</label>
                                <select name="kategori" class="form-control" required id="">
                                    <option value="YES">YES</option>
                                    <option value="REG">REG</option>
                                    <option value="OKE">OKE</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="number" name="nomor" class="form-control" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <input class="form-control" type="type" name="nama_penerima" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Alamat Penerima</label>
                                <textarea class="form-control" name="alamat_penerima" id="" required cols="10"
                                    rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Jarak</label>
                                <input class="form-control" type="type" name="jarak" required>
                            </div>

                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input class="form-control" type="number" name="kode" id="" required>
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