<?php 
session_start();
include 'app/koneksi.php';
if (isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $result = mysqli_query($db->koneksi,
    "SELECT * FROM users WHERE email='$email' and password='$pass'");
    $row = mysqli_num_rows($result);
    if($row > 0){
        $_SESSION['login'] = "Admin";
        $alert = "alert('Login Berhasil'); 
                window.location='admin/index.php';";
    exit("<script>$alert</script>");

    }else {

    $alert = "alert('Salah Username Atau Password'); 
                history.go(-1);";
    exit("<script>$alert</script>");
    
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
user    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="assets/admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="assets/admin/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/admin/img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page login-page">
        <div class="container">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner">
                    <div class="logo text-uppercase"><span>Bootstrap</span><strong
                            class="text-primary">Dashboard</strong></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <form action="" method="post" class="text-left form-validate">
                        <div class="form-group-material">
                            <input id="login-email" type="email" name="email" required
                                data-msg="Please enter your email" class="input-material">
                            <label for="login-email" class="label-material">Email</label>
                        </div>
                        <div class="form-group-material">
                            <input id="login-password" type="password" name="password" required
                                data-msg="Please enter your password" class="input-material">
                            <label for="login-password" class="label-material">Password</label>
                        </div>
                        <div class="form-group text-center"><input type="submit"name="masuk" value="login"
                                class="btn btn-primary">
                            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                        </div>
                    </form><a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small><a
                        href="register.html" class="signup">Signup</a>
                </div>
                <div class="copyrights text-center">
                    <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard"
                            class="external">Bootstrapious</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="assets/admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="assets/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="assets/admin/js/front.js"></script>
</body>

</html>