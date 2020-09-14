<?php
if(isset($_POST['s_login'])){
    $s_username = $_POST['s_username'];
    $s_password = $_POST['s_password'];

    include '../../includes/db.php';
    $s_login = "SELECT * FROM supervisor s WHERE s.user_name='$s_username' AND s.password='$s_password'";
    $s_login_query = mysqli_query($conn,$s_login);
    $s_row_check = mysqli_num_rows($s_login_query);
    if($s_row_check>0)
    {
        $s_row=mysqli_fetch_array($s_login_query);
        session_start();
        
        $_SESSION['s_username']=$s_row['first_name'];
        $_SESSION['s_id']=$s_row['id'];
        
        
        header("location:index.php");
    }
    else{
        header("location:supervisor_login.php");
    }
}
else 
{
    echo $_SESSION['c_id'];
    echo "error login";
}

?>