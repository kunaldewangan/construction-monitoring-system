<?php

session_start();
if (isset($_SESSION['s_id'])) {


if (isset($_POST['contractor_registration_submit'])) {
    include '../../includes/db.php';

    $first_name = $_POST['contractor_first_name'];
    $last_name = $_POST['contractor_last_name'];
    $contractor_user_name = $_POST['contractor_user_name'];
    $password = $_POST['contractor_password'];
    $email = $_POST['contractor_email'];
    $gender = $_POST['contractor_gender'];
    $experience = $_POST['contractor_experience'];
    $phone = $_POST['contractor_phone_number'];
    $state = $_POST['contractor_state'];
    $city = $_POST['contractor_city'];
    $address = $_POST['contractor_address'];

    $contractor_registration_insert = "INSERT INTO contractor (first_name,last_name,contractor_user_name,contractor_password,contractor_email,contractor_gender,contractor_experience,contractor_phone,contractor_state,contractor_city,contractor_address) VALUES('$first_name','$last_name','$contractor_user_name','$password','$email','$gender','$experience','$phone','$state','$city','$address')";
    $contractor_insert_query = mysqli_query($conn, $contractor_registration_insert);

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
                        Contractor Registration

                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Contractor Registration
                            </li>
                        </ol>


                        <?php
                        if ($contractor_insert_query) { ?>

                            <div class="container pt-3 pb-3">
                                <div class="jumbotron text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Contractor Registered!!</h1>
                                            <a href="contractor_registration.php"><button class="btn btn-primary">Go back</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } else { ?>
                            <div class="container pt-3 pb-3">
                                <div class="jumbotron text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Error!!</h1>
                                            <a href="contractor_registration.php"><button class="btn btn-primary">Go back</button></a>
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

<?php }
else {
    header("location:supervisor_login.php");
}
?>