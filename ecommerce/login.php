<?php
session_start();
include 'database.php';
$login = new Login();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="bg-dark">

    <div class="container-fluid">
        <div class="row justify-content-center row-xl-4 " style="margin-top: 150px;">
            <div class="col-xl-3 mx-auto align-items-center text-center">
                <h1 class="text-white">Login</h1>
                <div class="card bg-light mb-3 text-center">
                    <div class="card-body ">
                        <form action="proseslog.php?aksi=login" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="user" id="" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="pass" id="" required>
                            </div>

                            <input type="submit" value="Masuk" class="btn btn-info" name="save">
                            <a href="register.php" class="btn btn-success" role="button">Registrasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php


?>