<?php session_start();
if (isset($_SESSION['user_id'])) {
    $user_s_id = $_SESSION['user_id'];
    include '../../includes/db.php';
    $user_profile = "SELECT * FROM user u WHERE u.id=$user_s_id";
    $user_profile_query = mysqli_query($conn, $user_profile);
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
                                Profile Page
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Profile Page 
                                </li>
                            </ol>

                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4" style="border:2px solid black ;">
                            <h1 class="display-1 text-center">My Profile</h1>


                            <form>
                                <?php
                                while ($user_row = mysqli_fetch_assoc($user_profile_query)) { ?>


                                    <div class="form-group col-md-6">
                                        <label for="ApplicationID1">Application ID</label>
                                        <input type="text" class="form-control" id="ApplicationID1" value="<?php echo $user_row['id']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="firstName1">First Name</label>
                                        <input type="text" class="form-control" id="firstName1" value="<?php echo $user_row['first_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName1">Last Name</label>
                                        <input type="text" class="form-control" id="lastName1" value="<?php echo $user_row['last_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="userName1">User name</label>
                                        <input type="text" class="form-control" id="userName1" value="<?php echo $user_row['user_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Password1">Password</label>
                                        <input type="text" class="form-control" id="Password1" value="<?php echo $user_row['user_password']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserGmail1">Gmail ID</label>
                                        <input type="text" class="form-control" id="UserGmail1" value="<?php echo $user_row['user_email']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserGender1">Gender</label>
                                        <input type="text" class="form-control" id="UserGender1" value="<?php echo $user_row['user_gender']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ProjectStatus1">Project Status</label>
                                        <input type="text" class="form-control" id="ProjectStatus1" value="<?php echo $user_row['project_status']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserPhone1">Phone</label>
                                        <input type="text" class="form-control" id="UserPhone1" value="<?php echo $user_row['user_phone']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserState1">State</label>
                                        <input type="text" class="form-control" id="UserState1" value="<?php echo $user_row['user_state']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserCity1">City</label>
                                        <input type="text" class="form-control" id="UserCity1" value="<?php echo $user_row['user_city']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="UserAddress1">Address</label>
                                        <input type="text" class="form-control" id="UserAddress1" value="<?php echo $user_row['user_address']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="RegistrationTime1">Registration Time</label>
                                        <input type="text" class="form-control" id="RegistrationTime1" value="<?php echo $user_row['Registration_time']; ?>" disabled>
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