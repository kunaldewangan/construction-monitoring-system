<?php 
if(!isset($_SESSION['user_id'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    include '../../includes/db.php';
    $user_login = "SELECT * FROM user u WHERE u.user_name='$user_name' AND u.user_password='$user_password'";
    $user_login_query = mysqli_query($conn,$user_login);
    $user_row_check = mysqli_num_rows($user_login_query);
    if($user_row_check>0)
    {
        $user_row=mysqli_fetch_array($user_login_query);
        session_start();
        
        $_SESSION['user']=$user_row['first_name'];
        $_SESSION['user_id']=$user_row['id'];
        
        
        header("location:index.php");
    }
    else 
    {
        header("location:user_login.php");
    }
}

?>