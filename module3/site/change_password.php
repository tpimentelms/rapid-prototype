<?php
    $title = "Change Password";
    $redirect = "login.php";
    $user_logged = true; 
    include "start.php";
    $user = $_SESSION['user_id'];
    require 'database.php';
    $main_page = "change_password_main.php";
    include "base.php";
?>