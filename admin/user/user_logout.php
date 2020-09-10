<?php 
session_start();

if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
    unset($_SESSION['user_id']);
    $d=base64_encode($_SESSION['user']);
    header("location:user_login.php?msg=$d");
}


?>