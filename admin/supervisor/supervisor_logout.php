<?php 
session_start();
// session_destroy();

if(isset($_SESSION['s_id'])){
    unset($_SESSION['s_id']);
    unset($_SESSION['s_username']);
    $d=base64_encode($_SESSION['s_id']);
    header("location:supervisor_login.php?msg=$d");
}


?>
