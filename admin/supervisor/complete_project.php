<?php
session_start();
if (isset($_SESSION['s_id'])) {
include '../../includes/db.php';
$complete_project = "SELECT * FROM project_status";
$complete_project_query = mysqli_query($conn,$complete_project);

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
                            Complete Project
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Complete Project
                            </li>
                        </ol>

                        
                        <!--this div for scroll table-->
                        <div style="overflow:scroll;">

                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">User ID</th>
                                        <th class="text-center">Contractor ID</th>
                                        <th class="text-center">Project ID</th>
                                        <th class="text-center">Project Status</th>
                                        <th class="text-center">Time</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($complete_project_query)) { ?>


                                        <tr>
                                            <td><?php echo $row['user_id'];?></td>
                                            <td><?php echo $row['contractor_id'];?></td>
                                            <td><?php echo $row['project_id'];?></td>
                                            <td><?php echo $row['project_status'];?></td>
                                            <td><?php echo $row['time'];?></td>
                                          
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
<?php }
else 
{
    header("location:supervisor_login.php");
}
?>