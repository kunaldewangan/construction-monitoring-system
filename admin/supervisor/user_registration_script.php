<?php

session_start();
if (isset($_SESSION['s_id'])) {

    if (isset($_POST['user_registration_submit'])) {
        include '../../includes/db.php';

        $first_name = $_POST['user_first_name'];
        $last_name = $_POST['user_last_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['user_password'];
        $email = $_POST['user_email'];
        $gender = $_POST['user_gender'];
        $phone = $_POST['user_phone_number'];
        $state = $_POST['user_state'];
        $city = $_POST['user_city'];
        $address = $_POST['user_address'];

        $user_registration_insert = "INSERT INTO user (first_name,last_name,user_name,user_password,user_email,user_gender,user_phone,user_state,user_city,user_address) VALUES('$first_name','$last_name','$user_name','$password','$email','$gender','$phone','$state','$city','$address')";
        $user_query = mysqli_query($conn, $user_registration_insert);
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <?php include 'supervisor_head.php'; ?>

    <body>


        <div id="wrapper">

            <?php include 'supervisor_dashboard_layout.php'; ?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                User Registration

                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> User Registration
                                </li>
                            </ol>


                            <?php
                            if ($user_query) { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>user successfully Registered!!</h1>
                                                <a href="user_registration.php"><button class="btn btn-primary">Go back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>user Not Registered!!</h1>
                                                <a href="user_registration.php"><button class="btn btn-primary">Go back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }


                            ?>


                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>



<?php } else {
    header("location:supervisor_login.php");
}
?>