<?php session_start();
if (isset($_SESSION['user_id'])) {
    include '../../includes/db.php';
    $user_s_id = $_SESSION['user_id'];
    $mycontractor = "SELECT co.* FROM u_c_p_status ucp,contractor co WHERE ucp.user_id=$user_s_id AND ucp.project_status='allocated' AND ucp.contractor_id IN (SELECT c.id FROM contractor c) AND ucp.contractor_id=co.id";
    $mycontractor_query = mysqli_query($conn, $mycontractor);

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
                                My Contractor
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> My Contractor
                                </li>
                            </ol>
                        </div>


                        <div class="col-lg-4"></div>
                        <div class="col-lg-4" style="border:2px solid black ;">
                            <h1 class="display-1 text-center">My Contractor</h1>


                            <form>
                                <?php
                                while ($row = mysqli_fetch_assoc($mycontractor_query)) { ?>


                                    <div class="form-group col-md-6">
                                        <label for="ApplicationID1">Application ID</label>
                                        <input type="text" class="form-control" id="ApplicationID1" value="<?php echo $row['id']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="firstName1">First Name</label>
                                        <input type="text" class="form-control" id="firstName1" value="<?php echo $row['first_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName1">Last Name</label>
                                        <input type="text" class="form-control" id="lastName1" value="<?php echo $row['last_name']; ?>" disabled>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="UserGmail1">Gmail ID</label>
                                        <input type="text" class="form-control" id="UserGmail1" value="<?php echo $row['contractor_email']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserGender1">Gender</label>
                                        <input type="text" class="form-control" id="UserGender1" value="<?php echo $row['contractor_gender']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Experience1">Experience</label>
                                        <input type="text" class="form-control" id="Experience1" value="<?php echo $row['contractor_experience']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserPhone1">Phone</label>
                                        <input type="text" class="form-control" id="UserPhone1" value="<?php echo $row['contractor_phone']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserState1">State</label>
                                        <input type="text" class="form-control" id="UserState1" value="<?php echo $row['contractor_state']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserCity1">City</label>
                                        <input type="text" class="form-control" id="UserCity1" value="<?php echo $row['contractor_city']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserAddress1">Address</label>
                                        <input type="text" class="form-control" id="UserAddress1" value="<?php echo $row['contractor_address']; ?>" disabled>
                                    </div>

                                <?php } ?>
                            </form>

                        </div>
                        <div class="col-lg-4"></div>
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
    header("location:user_login.php");
}

 ?>