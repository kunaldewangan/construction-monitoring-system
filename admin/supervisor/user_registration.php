<?php session_start();
if(isset($_SESSION['s_id']))
{?>


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
                            User Registration
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> User Registration
                            </li>
                        </ol>

                        <form action="user_registration_script.php" method="POST">
                            <div class="form-group col-md-6">
                                <label for="exampleInputfirstname1">First Name</label>
                                <input type="text" class="form-control" id="exampleInputfirstname1" aria-describedby="firstnameHelp" placeholder="Enter First Name" name="user_first_name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputlastname1">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputlastname1" aria-describedby="lastnameHelp" placeholder="Enter last Name" name="user_last_name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputusername1">User Name</label>
                                <input type="text" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Enter user Name" name="user_name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputpassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputpassword1" aria-describedby="passwordHelp" placeholder="Enter password" name="user_password">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="user_email">
                            </div>

                            <div class="form-group col-md-6">Gender:

                                <div class="form-check form-check-inline">
                                    Male
                                    <input class="form-check-input" type="radio" id="inlineRadio1" value="Male" name="user_gender">

                                </div>
                                <div class="form-check form-check-inline">
                                    Female
                                    <input class="form-check-input" type="radio" id="inlineRadio2" value="Female" name="user_gender">

                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputphone1">Phone Number</label>
                                <input type="number" class="form-control" id="exampleInputphone1" aria-describedby="userphoneHelp" placeholder="Enter user phone number" name="user_phone_number">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputstate1">State</label>
                                <input type="text" class="form-control" id="exampleInputstate1" aria-describedby="stateHelp" name="user_state" value="sikkim">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputcity1">City</label>
                                <input type="text" class="form-control" id="exampleInputcity1" aria-describedby="cityHelp" name="user_city" value="Gangtok">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleuseraddress1">Address</label>
                                <textarea class="form-control" id="exampleuseraddress1" rows="3" name="user_address"></textarea>
                            </div>

                            <div class="form-group col-md-6">

                                <button type="submit" class="btn btn-primary" name="user_registration_submit">Create</button>
                            </div>
                        </form>


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