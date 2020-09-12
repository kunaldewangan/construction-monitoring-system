<?php session_start();
if (isset($_SESSION['c_id'])) {

    if (isset($_POST['upload_image'])) {

        include '../../includes/db.php';

        $contractor_id = $_POST['contractor_id'];
        $user_id = $_POST['user_id'];
        $project_id = $_POST['project_id'];

        $project_step = $_POST['project_step'];
        $image_latitude = $_POST['image_latitude'];
        $image_longitude = $_POST['image_longitude'];

        //for Image
        $source = $_FILES["image_upload"]["tmp_name"];
        $target = "../../uploads/" . $_FILES["image_upload"]["name"];
        echo "target:" . $target;
        $image_upload = $_FILES["image_upload"]["name"];

        if (move_uploaded_file($source, $target)) {

            $image_upload_insert = "INSERT INTO u_c_p_image (contractor_id,user_id,project_id,image,project_step,latitude,longitude) VALUES('$contractor_id','$user_id','$project_id','$image_upload','$project_step','$image_latitude','$image_longitude')";
            $image_upload_insert_query = mysqli_query($conn, $image_upload_insert);
        } else {
            echo mysqli_error($conn);
        }
    }



?>


    <!DOCTYPE html>
    <html lang="en">

    <?php include 'contractor_head.php'; ?>

    <body>


        <div id="wrapper">

            <?php include 'contractor_dashboard_layout.php'; ?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Upload Image
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Upload Image
                                </li>
                            </ol>

                            <?php
                            if ($image_upload_insert_query) { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Uploaded Image!!</h1>
                                                <a href="user_table.php"><button class="btn btn-primary">Go back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } else { ?>

                                <div class="container pt-3 pb-3">
                                    <div class="jumbotron text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Not Uploaded!! Try Again.</h1>
                                                <a href="user_table.php"><button class="btn btn-primary">Go back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            <?php } ?>


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
    header("location:contractor_login.php");
}
