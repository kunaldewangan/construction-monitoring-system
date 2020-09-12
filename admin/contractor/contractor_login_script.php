<?php
if(isset($_POST['c_login'])){
    $c_username = $_POST['c_username'];
    $c_password = $_POST['c_password'];

    include '../../includes/db.php';
    $c_login = "SELECT * FROM contractor c WHERE c.contractor_user_name='$c_username' AND c.contractor_password='$c_password'";
    $c_login_query = mysqli_query($conn,$c_login);
    $c_row_check = mysqli_num_rows($c_login_query);
    if($c_row_check>0)
    {
        $c_row=mysqli_fetch_array($c_login_query);
        session_start();
        
        $_SESSION['c_username']=$c_row['first_name'];
        $_SESSION['c_id']=$c_row['id'];
        
        
        header("location:index.php");
    }
    else{
        header("location:contractor_login.php");
    }
}
else 
{
    echo "login error.";
}

?>