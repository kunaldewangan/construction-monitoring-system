<?php session_start();
if(isset($_SESSION['s_id']))
{?>

<?php include 'supervisor_head.php';?>

<body>
    

<div id="wrapper">
        
        <?php include 'supervisor_dashboard_layout.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Create Projects
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Create Projects
                            </li>
                        </ol>

                        
                        <form action="create_project_script.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputprojectname1">Project Name</label>
                                <input type="text" class="form-control" id="exampleInputprojectname1" aria-describedby="projectnameHelp" placeholder="Enter project Name" name="project_name">
                            </div>

                            <div class="form-group">
                                <label for="exampleprojectdescription1">Description</label>
                                <textarea class="form-control" id="exampleprojectdescription1" rows="3" name="project_description"></textarea>
                            </div>
                                    

                            <div class="form-group col-md-6">
                                <label for="exampleInputstate1">State</label>
                                <input type="text" class="form-control" id="exampleInputstate1" aria-describedby="stateHelp" name="project_state" value="sikkim">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputcity1">City</label>
                                <input type="text" class="form-control" id="exampleInputcity1" aria-describedby="cityHelp" name="project_city" value="Gangtok">
                            </div>

                            <div class="form-group">
                                <label for="examplecontractoraddress1">Address</label>
                                <textarea class="form-control" id="examplecontractoraddress1" rows="3" name="project_address"></textarea>
                            </div>

                            
                            <div class="form-group col-md-6">
                                <label for="exampleInputlatitude1">Latitude</label>
                                <input type="text" class="form-control" id="exampleInputlatitude1" aria-describedby="projectlatitudeHelp" placeholder="Enter project latitude" name="project_latitude">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputLongitude1">Longitude</label>
                                <input type="text" class="form-control" id="exampleInputLongitude1" aria-describedby="projectlongitudeHelp" placeholder="Enter project longitude" name="project_longitude">
                            </div>
                            


                            <div class="form-group col-md-6">

                                <button type="submit" class="btn btn-primary" name="create_project_submit">Create</button>
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