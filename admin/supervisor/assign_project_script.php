<?php

session_start();
if (isset($_SESSION['s_id'])) {


    if (isset($_POST['assign_project'])) {
        include '../../includes/db.php';
        $user_id_select = $_POST['user_id_select'];
        $contractor_id_select = $_POST['contractor_id_select'];
        $project_id_select = $_POST['project_id_select'];
        $project_status = $_POST['project_status'];


        $project_assign_insert = "INSERT INTO u_c_p_status (user_id,contractor_id,project_id,project_status) VALUES('$user_id_select','$contractor_id_select','$project_id_select','$project_status')";
        $project_assign_projectstatus = "UPDATE user u SET u.project_status='$project_status' WHERE u.id=$user_id_select";
        $project_assign_insert_query = mysqli_query($conn, $project_assign_insert);
        //for update project status in user table

        mysqli_query($conn, $project_assign_projectstatus);
    } ?>

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
                                Allocate Project

                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Allocate Project
                                </li>
                            </ol>


                            <?php
                            if ($project_assign_insert_query) { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Project assigned successfully!!</h1>
                                                <a href="assign_project.php"><button class="btn btn-primary">Go back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php } else { ?>
                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Project Not assigned</h1>
                                                <a href="assign_project.php"><button class="btn btn-primary">Go back</button></a>
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