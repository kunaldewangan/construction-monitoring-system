<?php

session_start();
if(isset($_SESSION['s_id']))
{
include '../../includes/db.php';
$contractor_select = "SELECT c.id,c.first_name,c.last_name,c.contractor_user_name,c.contractor_email,c.contractor_gender,c.contractor_experience,c.contractor_phone,c.contractor_state,c.contractor_city,c.contractor_address FROM contractor c";
$contractor_select_query = mysqli_query($conn, $contractor_select);

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
                            Contractor Table
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Contractor Table
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
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Experience</th>
                                        <th>Phone No</th>
                                        
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($contractor_select_query)) { ?>


                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['first_name'];?></td>
                                            <td><?php echo $row['last_name'];?></td>
                                            <td><?php echo $row['contractor_user_name'];?></td>
                                            <td><?php echo $row['contractor_email']?></td>
                                            <td><?php echo $row['contractor_gender'];?></td>
                                            <td><?php echo $row['contractor_experience'];?></td>
                                            <td><?php echo $row['contractor_phone'];?></td>
                                            
                                            <td><?php echo $row['contractor_state'];?></td>
                                            <td><?php echo $row['contractor_city'];?></td>
                                            <td><?php echo $row['contractor_address'];?></td>
                                          
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
else 
{
    header("location:supervisor_login.php");
}
?>