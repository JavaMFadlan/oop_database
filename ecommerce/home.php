<?php 
session_start();

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

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white"><i class="fa fa-home fa-lg"> Home</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-flex">
                <?php if ($_SESSION['user'] == "admin") {?>

                <li class="nav-item">
                    <a class="" aria-labelledby="dropdownMenu2" href="index.php">
                        <input class="btn btn-outline-success" type="submit" value="Masuk Index"></a>
                </li>
                <!-- </ul> -->
                <li class="nav-item">
                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php">
                        <input class="btn btn-outline-danger" type="submit" value="logout"></a>
                </li>

                <?php }elseif($_SESSION['user']) {?>
                <li class="nav-item">
                    <a class="" aria-labelledby="dropdownMenu2" href="user/index.php">
                        <input class="btn btn-outline-success" type="submit" value="Masuk"></a>
                </li>
                <li class="nav-item">
                    <a class="" aria-labelledby="dropdownMenu2" href="logout.php">
                        <input class="btn btn-outline-danger" type="submit" value="logout"></a>
                </li>

                <?php }else {?>
                <li class="nav-item">
                    <a class="" aria-labelledby="dropdownMenu2" href="login.php">
                        <input class="btn btn-outline-success" type="submit" value="Login"></a>
                </li>
                <?php }?>
            </ul>
        </div>
        </div>
    </nav>


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">Selamat Datang
                <?= $_SESSION['user']?>
            </h1>
        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>