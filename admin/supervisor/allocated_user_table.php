<?php
session_start();
if(isset($_SESSION['s_id']))
{


include '../../includes/db.php';
$user_select = "SELECT u.id,u.first_name,u.last_name,u.user_name,u.user_gender,u.user_phone,u.project_status,u.user_city,u.user_state,u.user_address FROM user u where u.id IN (SELECT ucp.user_id from u_c_p_status ucp)";
$user_select_query = mysqli_query($conn, $user_select);
?>

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
                            User Table
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
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
                                        <th>Application ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User Name</th>
                                        <th>Gender</th>
                                        <th>Phone No</th>
                                        <th>Project Allocated</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($user_select_query)) { ?>


                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['first_name'];?></td>
                                            <td><?php echo $row['last_name'];?></td>
                                            <td><?php echo $row['user_name'];?></td>
                                            <td><?php echo $row['user_gender'];?></td>
                                            <td><?php echo $row['user_phone'];?></td>
                                            <td><?php echo $row['project_status'];?></td>
                                            <td><?php echo $row['user_city'];?></td>
                                            <td><?php echo $row['user_state'];?></td>
                                            <td><?php echo $row['user_address'];?></td>
                                          
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

                                    <?php }
                                    else {
                                        header("location:supervisor_login.php");
                                    }

                                    
                                    ?>                                     
                                        