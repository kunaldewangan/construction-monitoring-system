<?php 
session_start();
// session_destroy();
if(isset($_SESSION['c_id']))
{
    unset($_SESSION['c_id']);
    unset($_SESSION['c_username']);
    $d=base64_encode($_SESSION['c_id']);
    header("location:contractor_login.php?msg=$d");
}

?>