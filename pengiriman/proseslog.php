<?php
session_start();
include 'database.php';

$aksi = $_GET['aksi'];

if (isset($_POST['save'])) {
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    
if($aksi == "register"){
    $data2 = $login->periksa();
    $data1 = mysqli_fetch_assoc($data2);
    if ($username != $data1['username']) {
        $passw = password_hash($pass,PASSWORD_DEFAULT);
        $login->register($username, $passw);
        header("location:login.php");
    }
    else{
        header("location:register.php");
    }
}
elseif($aksi == "login"){
    $data3 = $login->masuk($username);
    $data = mysqli_fetch_assoc($data3);
    $usern = $data['username'];
    $pas = $data['password'];
    $verify = password_verify($pass,$pas);
    // var_dump($pas);
    if($verify == $pass){
        $_SESSION['user'] = $username;
        header("location:index.php");
    }else {
        header("location:login.php");
    }
}
}
?>