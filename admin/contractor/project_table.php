<?php session_start();
if (isset($_SESSION['c_id'])) {
    $c_session_id = $_SESSION['c_id'];
    include '../../includes/db.php';
    $c_project = "SELECT ucp.contractor_id,ucp.project_id,ucp.project_status,p.* FROM u_c_p_status ucp,project p WHERE ucp.contractor_id='$c_session_id' AND ucp.project_status='allocated' AND ucp.project_id=p.id GROUP BY ucp.project_id";
    $c_project_query = mysqli_query($conn, $c_project);

?>

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
                                Project Table
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Project Table
                                </li>
                            </ol>

                            <!--this div for scroll table-->
                            <div style="overflow:scroll;">

                                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Contractor ID</th>
                                            <th>Project ID</th>
                                            <th>Project Name</th>
                                            <th>Project Description</th>
                                            <th>Project Status</th>
                                            <th>State</th>
                                            <th>City</th>

                                            <th>Address</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Project Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($c_project_query)) { ?>


                                            <tr>
                                                <td><?php echo $row['contractor_id']; ?></td>
                                                <td><?php echo $row['project_id']; ?></td>
                                                <td><?php echo $row['p_name']; ?></td>
                                                <td><?php echo $row['p_description']; ?></td>
                                                <td><?php echo $row['project_status']; ?></td>
                                                <td><?php echo $row['p_state']; ?></td>

                                                <td><?php echo $row['p_city']; ?></td>
                                                <td><?php echo $row['p_address']; ?></td>
                                                <td><?php echo $row['p_latitude']; ?></td>
                                                <td><?php echo $row['p_longitude']; ?></td>
                                                <td><?php echo $row['project_creating_time']; ?></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--end of scroll div-->

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
<?php } else {
    header("location:contractor_login.php");
}
?>