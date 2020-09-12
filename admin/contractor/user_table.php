<?php session_start();
if (isset($_SESSION['c_id'])) {
    $c_id = $_SESSION['c_id'];
    include '../../includes/db.php';
    $u_c_p_status_select = "SELECT ucp.user_id,ucp.contractor_id,ucp.project_id,u.first_name,u.last_name,p.p_name,ucp.project_status,u.user_email,u.user_phone FROM u_c_p_status ucp, user u,project p WHERE ucp.user_id IN (SELECT u.id FROM user u) AND ucp.project_id IN (SELECT p.id FROM project p) AND ucp.user_id = u.id AND ucp.project_id=p.id AND ucp.project_status='allocated' AND ucp.contractor_id='$c_id'";
    $u_c_p_status_select_query = mysqli_query($conn, $u_c_p_status_select);
?>

    <!DOCTYPE html>
    <html lang="en">
    <?php include 'contractor_head.php'; ?>

    <body>

        <div id="wrapper">
            <div id="page-wrapper">
                <?php include 'contractor_dashboard_layout.php'; ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                User Table
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> User Table
                                </li>
                            </ol>


                            <!--this div for scroll table-->
                            <div style="overflow:scroll;">

                                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>User Application ID</th>
                                            <th>Contractor Application ID</th>
                                            <th>Project Application ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Project Name</th>
                                            <th>Project Status</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Upload Image</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php



                                        while ($row = mysqli_fetch_assoc($u_c_p_status_select_query)) { ?>


                                            <tr>
                                                <td><?php echo $row['user_id']; ?></td>
                                                <td><?php echo $row['contractor_id']; ?></td>
                                                <td><?php echo $row['project_id']; ?></td>

                                                <td><?php echo $row['first_name']; ?></td>
                                                <td><?php echo $row['last_name']; ?></td>
                                                <td><?php echo $row['p_name']; ?></td>
                                                <td><?php echo $row['project_status']; ?></td>
                                                <td><?php echo $row['user_email']; ?></td>
                                                <td><?php echo $row['user_phone']; ?></td>
                                                <td><?php $user_id = $row['user_id'];
                                                    $contractor_id = $row['contractor_id'];
                                                    $project_id = $row['project_id'];


                                                    echo "<a href='upload_image.php?user_id=$user_id&contractor_id=$contractor_id&project_id=$project_id'><button class='btn btn-danger'><i class='fa fa-fw fa-upload'></i>Click</button></a>"; ?></td>


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

    </html>
<?php } else {
    header("location:contractor_login.php");
}
?>