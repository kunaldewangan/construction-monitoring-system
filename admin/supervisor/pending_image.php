<?php
session_start();
if (isset($_SESSION['s_id'])) {

include '../../includes/db.php';
$u_c_p_image_select = "SELECT * FROM u_c_p_image ucp WHERE ucp.image_verification='pending'";
$u_c_p_image_select_query = mysqli_query($conn, $u_c_p_image_select);

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'supervisor_head.php'; ?>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <?php include 'supervisor_dashboard_layout.php'; ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pending Image Table
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Pending Image
                            </li>
                        </ol>



                        <!--this div for scroll table-->
                        <div style="overflow:scroll;">

                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Contractor Application ID</th>
                                        <th>User Application ID</th>
                                        <th>Project Application ID</th>
                                        <th>Image</th>
                                        <th>Project Step</th>
                                        <th>Image Status</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Time</th>
                                        <th>Update</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    

                                    

                                    <?php
                                    while ($row = mysqli_fetch_assoc($u_c_p_image_select_query)) { ?>


                                        <tr>
                                            

                                                
                                                <td><?php echo $row['contractor_id']; ?></td>
                                                <td><?php echo $row['user_id']; ?></td>
                                                <td><?php echo $row['project_id']; ?></td>
                                                
                                                <td class="img-popup"><a href="../../uploads/<?php echo $row['image']; ?>"><img src="../../uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['image']; ?>" style="width: 50px;" /></a></td>
                                                <td><?php echo $row['project_step']; ?></td>
                                                <td><?php echo $row['image_verification']; ?></td>
                                                <td><?php echo $row['latitude']; ?></td>
                                                <td><?php echo $row['longitude']; ?></td>
                                                <td><?php echo $row['upload_time']; ?></td>
                                            

                                            <td><?php $contractor_id = $row['contractor_id'];
                                                $user_id = $row['user_id'];
                                                $project_id = $row['project_id'];
                                                $project_step = $row['project_step'];
                                                echo "<a href='pending_image_update.php?cid=$contractor_id&uid=$user_id&pid=$project_id&p_step=$project_step'><button class='btn btn-danger' name='verify_image' value='submit'>Verify</button></a>" ?></td>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.img-popup').magnificPopup({
                type: 'image',
                delegate: 'a'
            });
        });
    </script>


</body>

</html>
<?php }
else 
{
    header("location:supervisor_login.php");
}
?>