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
                            Assign Project to User and Contractor
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Assign Project
                            </li>
                        </ol>
                        



                        <form action="assign_project_script.php" method="POST">
                            <div class="form-group col-md-3">
                                <label for="useridselect1">User Application Id</label>
                                <select class="form-control" id="useridselect1" name="user_id_select">
                                    <option></option>
                                    <?php include '../../includes/db.php';
                                    $user_id_select = "SELECT u.id,u.first_name,u.last_name FROM user u WHERE u.project_status='pending' OR u.project_status='unallocated'";
                                    $user_id_select_query = mysqli_query($conn, $user_id_select);
                                    while ($user_row = mysqli_fetch_assoc($user_id_select_query)) { ?>

                                        <option value="<?php echo $user_row['id'] ?>"><?php echo "( ".$user_row['id']." ) ".$user_row['first_name']." ".$user_row['last_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="contractoridselect1">Contractor Application Id</label>
                                <select class="form-control" id="contractoridselect1" name="contractor_id_select">
                                    <option></option>
                                    <?php include '../../includes/db.php';
                                    $contractor_id_select = "SELECT c.id,c.first_name,c.last_name FROM contractor c";
                                    $contractor_id_select_query = mysqli_query($conn, $contractor_id_select);
                                    while ($contractor_row = mysqli_fetch_assoc($contractor_id_select_query)) { ?>

                                        <option value="<?php echo $contractor_row['id'] ?>"><?php echo "( ".$contractor_row['id']." ) ".$contractor_row['first_name']." ".$contractor_row['last_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="projectidselect1">Project Application Id</label>
                                <select class="form-control" id="projectidselect1" name="project_id_select">
                                    <option></option>
                                    <?php include '../../includes/db.php';
                                    $project_id_select = "SELECT p.id,p.p_name FROM project p";
                                    $project_id_select_query = mysqli_query($conn, $project_id_select);
                                    while ($project_row = mysqli_fetch_assoc($project_id_select_query)) { ?>

                                        <option value="<?php echo $project_row['id'] ?>"><?php echo "( ".$project_row['id']." ) ".$project_row['p_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            
                            <div class="form-group col-md-3">
                                <label for="projectstatus1">Project Status</label>
                                <select class="form-control" id="projectstatus1" name="project_status">
                                    <option></option>
                                    <option value="pending">pending</option>
                                    
                                    <option value="allocated">allocated</option>
                                    
                                </select>
                            </div>

                            <div class="form-group col-md-6">

                                <button type="submit" class="btn btn-primary" name="assign_project">Allocate</button>
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