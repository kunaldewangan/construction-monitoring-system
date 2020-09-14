<?php

session_start();
if (isset($_SESSION['s_id'])) {

    if (isset($_REQUEST['cid'])) {
        include '../../includes/db.php';
        $contractor_id = $_REQUEST['cid'];
        $user_id = $_REQUEST['uid'];
        $project_id = $_REQUEST['pid'];
        $project_step = $_REQUEST['p_step'];
        $image_verify = "UPDATE u_c_p_image ucp SET ucp.image_verification='verified',ucp.verify_time=now() WHERE ucp.contractor_id=$contractor_id AND ucp.user_id=$user_id AND ucp.project_id=$project_id AND ucp.project_step=$project_step";
        $image_verify_query = mysqli_query($conn, $image_verify);
        if ($project_step == 4) {
            $project_status = 'complete';
            $complete_project = "INSERT INTO project_status (user_id,contractor_id,project_id,project_status) VALUES('$user_id','$contractor_id','$project_id','$project_status')";
            mysqli_query($conn, $complete_project);
        }
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
                                Pending Image

                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Pending Image
                                </li>
                            </ol>


                            <?php
                            if ($image_verify_query) { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Image Verified</h1>
                                                <a href="pending_image.php"><button class="btn btn-primary">Go back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php } else { ?>
                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Image Verified</h1>
                                                <a href="pending_image.php"><button class="btn btn-primary">Go back</button></a>
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