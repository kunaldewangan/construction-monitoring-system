<?php session_start();
$user_s_id = $_SESSION['user_id'];
include '../../includes/db.php';
$user_project = "SELECT po.*,ucp.project_status FROM u_c_p_status ucp,project po WHERE ucp.user_id=$user_s_id AND ucp.project_id IN (SELECT p.id FROM project p) AND ucp.project_id=po.id";
$user_project_query = mysqli_query($conn,$user_project);

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'user_head.php'; ?>
<body>

    <div id="wrapper">

    <?php include 'user_dashboard_layout.php'; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            My Project 
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> My Project
                            </li>
                        </ol>

                        <!--this div for scroll table-->
                        <div style="overflow:scroll;">

                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Name</th>
                                        <th>Description</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        
                                        <th>Project Latitude</th>
                                        <th>Project Longitude</th>
                                        <th>Project Created</th>
                                        <th>Project Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($user_project_query)) { ?>


                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['p_name'];?></td>
                                            <td><?php echo $row['p_description'];?></td>
                                            <td><?php echo $row['p_state'];?></td>
                                            <td><?php echo $row['p_city'];?></td>
                                            <td><?php echo $row['p_address'];?></td>
                                            
                                            <td><?php echo $row['p_latitude'];?></td>
                                            <td><?php echo $row['p_longitude'];?></td>
                                            <td><?php echo $row['project_creating_time'];?></td>
                                            <td><?php echo $row['project_status'];?></td>
                                          
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
