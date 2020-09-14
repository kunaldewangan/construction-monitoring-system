<?php
session_start();
if (isset($_SESSION['s_id'])) {


    if (isset($_POST['create_project_submit'])) {
        include '../../includes/db.php';
        $project_name = $_POST['project_name'];
        $project_description = $_POST['project_description'];
        $project_state = $_POST['project_state'];
        $project_city = $_POST['project_city'];
        $project_address = $_POST['project_address'];
        $project_latitude = $_POST['project_latitude'];
        $project_longitude = $_POST['project_longitude'];


        $project_creating_insert = "INSERT INTO project (p_name,p_description,p_state,p_city,p_address,p_latitude,p_longitude) VALUES('$project_name','$project_description','$project_state','$project_city','$project_address','$project_latitude','$project_longitude')";
        $project_creating_insert_query = mysqli_query($conn, $project_creating_insert);
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
                                Project

                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Projects
                                </li>
                            </ol>


                            <?php
                            if ($project_creating_insert_query) { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Project Created!!</h1>
                                                <a href="create_project.php"><button class="btn btn-primary">Go back</button></a>
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
                                                <a href="create_project.php"><button class="btn btn-primary">Go back</button></a>
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