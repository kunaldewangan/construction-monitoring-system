<?php 
    session_start();
    if(isset($_SESSION['c_id']))
    {?>


<!DOCTYPE html>
<html lang="en">
    <?php include 'contractor_head.php'; ?>
    
    <body>
        
        <div id="wrapper">
            <div id="page-wrapper">
                <?php include 'contractor_dashboard_layout.php'; ?>
                
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Upload Image
                                
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Upload Image
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-11">
                        <div class="text-center">
                            <h1 class="page-header">
                                Upload Image
                            </h1>
                            <?php
                            if (isset($_REQUEST['user_id'])) {
                                $user_id = $_REQUEST['user_id'];
                                $contractor_id = $_REQUEST['contractor_id'];
                                $project_id = $_REQUEST['project_id'];
                            }
                            ?>
                            <form action="upload_image_script.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputcontractor">Contractor ID</label>
                                    <input type="text" class="form-control" id="exampleInputcontractor" value="<?php if(isset($_REQUEST['contractor_id'])){echo $contractor_id;}  ?>" aria-describedby="contractorIdHelp" name="contractor_id">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUserId">UserID</label>
                                    <input type="text" class="form-control" id="exampleInputUserId" value="<?php if(isset($_REQUEST['user_id'])){echo $user_id;}  ?>" aria-describedby="userIdHelp" name="user_id">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="exampleInputprojectId1">Project ID</label>
                                    <input type="text" class="form-control" id="exampleInputprojectId1" value="<?php if(isset($_REQUEST['project_id'])){echo $project_id;}  ?>" aria-describedby="projectIdHelp" name="project_id">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputImage1">Image</label>
                                    <input type="file" accept="Image/*" class="form-control" id="exampleInputImage1" aria-describedby="imageHelp" name="image_upload" onclick="getLocation();">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="projectStep1">Project Step</label>
                                    <select class="form-control" id="projectStep1" name="project_step">
                                        <option></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        
                                    </select>
                                </div>
                                

                                

                                
                                <div class="form-group col-md-6">
                                    <label for="exampleInputLatitude1">Latitude</label>
                                    <input type="text" class="form-control" id="exampleInputLatitude1" aria-describedby="latitudeHelp" placeholder="Enter Latitude" name="image_latitude" value="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputLongitude1">Longitude</label>
                                    <input type="text" class="form-control" id="exampleInputLongitude1" aria-describedby="longitudeHelp" placeholder="Enter Longitude" name="image_longitude" value="">
                                </div>
                                
                                <div class="form-group col-md-12">

                                    <button type="submit" class="btn btn-danger" name="upload_image">Upload</button>
                                </div>
                            </form>

                        </div>
                        <!--end of text-center -->
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

    
<script>
var x = document.getElementById("exampleInputLatitude1");
var y = document.getElementById("exampleInputLongitude1");
var map;
var geocoder;
var infoWindow;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  x.value = position.coords.latitude;
  y.value = position.coords.longitude;
  
  }

</script>

<script>

  
</script>

</body>

</html>
<?php }
else
{
    header("location:contractor_login.php");
}
?>