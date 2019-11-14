<?php
session_start();
if (isset($_SESSION['user'])) {
        unset($_SESSION);
        session_destroy($_SESSION['user']);
        header("location:login.php");
    }
?>