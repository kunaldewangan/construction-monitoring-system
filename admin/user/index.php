<?php session_start();
if(isset($_SESSION['user']))
{
     $user_s_id = $_SESSION['user_id'];
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
                                User Page
                                
                            </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> User Page
                            </li>
                        </ol>
                        <div class="container pt-3 pb-3">
                            <div class="jumbotron text-center">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>welcome to User Dashboard!!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
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
    header("location:user_login.php");
}
?>


