<?php
session_start();
include 'database.php';
$login = new Login();

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
}
if($aksi == "register"){
    $data2 = $login->periksa();
    $data1 = mysqli_fetch_array($data2);

    if ($user != $data1['username']) {
        $passw = password_hash($pass,PASSWORD_DEFAULT);
        $login->register($user, $passw);
        header("location:login.php");
    }
    elseif($user == $data1['username']){
        header("location:register.php");
        return "<script>alert('username Telah Dipakai!');</script>";
    }
    // $passw = password_hash($pass,PASSWORD_DEFAULT);
    // $login->register($user, $passw);
    //     header("location:login.php");
}
elseif($aksi == "login"){
    $data1 = $login->masuk($user);
    $data = mysqli_fetch_array($data1);
    if(password_verify($pass,$data['password'])){
        $_SESSION['user'] = $user;
        header("location:home.php");
    }
    else{
        header("location:login.php");
    }
}
?>