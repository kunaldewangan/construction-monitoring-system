<?php
if (isset($_SESSION['s_username'])) { ?>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Supervisor | Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                <span class="pull-left">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                                </span>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>

            <?php
            include '../../includes/db.php';
            $pending_img = "SELECT ucp.image_verification FROM u_c_p_image ucp where ucp.image_verification='pending'";
            $pending_img_query = mysqli_query($conn, $pending_img);
            ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"><?php echo mysqli_num_rows($pending_img_query); ?></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">

                    <?php
                    while ($pending_img_row = mysqli_fetch_assoc($pending_img_query)) { ?>

                        <li>
                            <a href="pending_image.php"><span class="label label-danger">Pending Image</span></a>
                        </li>
                    <?php } ?>
                    <li class="divider"></li>
                    <li>
                        <a href="pending_image.php">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['s_username']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="supervisor_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>

                <!--   User Section   -->
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#user_section"><i class="fa fa-fw fa-users"></i>Users<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="user_section" class="collapse">

                        <li>
                            <a href="allocated_user_table.php"><i class="fa fa-fw fa-table"></i>Allocated Users Table</a>
                        </li>

                        <li>
                            <a href="new_user_table.php"><i class="fa fa-fw fa-table"></i>New Users Table</a>
                        </li>

                        <li>
                            <a href="user_registration.php"><i class="fa fa-fw fa-edit"></i>User Registration</a>
                        </li>

                    </ul>
                </li>


                <!--- Contractor Section --->
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#contractor_section"><i class="fa fa-fw fa-user"></i>Contractors<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="contractor_section" class="collapse">

                        <li>
                            <a href="contractors_table.php"><i class="fa fa-fw fa-table"></i>Contractor Table</a>
                        </li>

                        <li>
                            <a href="contractor_registration.php"><i class="fa fa-fw fa-edit"></i>Contractor Registration</a>
                        </li>
                    </ul>
                </li>


                <!-- Project Section-->
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#project"><i class="fa fa-fw fa-file"></i>Projects<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="project" class="collapse">
                        <li>
                            <a href="projects_table.php"><i class="fa fa-fw fa-table"></i>Project Table</a>
                        </li>



                        <li>
                            <a href="create_project.php"><i class="fa fa-fw fa-edit"></i>Create Project</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="assign_project.php"><i class="fa fa-fw fa-lock"></i>Allocate Project</a>
                </li>

                <li>
                    <a href="user_project.php"><i class="fa fa-fw fa-table"></i> User-Project Table</a>
                </li>



                <!-- Verification-->
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#verification"><i class="fa fa-fw fa-image"></i>Image status<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="verification" class="collapse">



                        <li>
                            <a href="pending_image.php"><i class="fa fa-fw fa-undo"></i>Pending Image</a>
                        </li>
                        <li>
                            <a href="verified_image.php"><i class="fa fa-fw fa-check"></i>Verified Image</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="ongoing_project.php"><i class="fa fa-fw fa-line-chart"></i> Ongoing Project</a>
                </li>
                <li>
                    <a href="complete_project.php"><i class="fa fa-fw fa-check"></i> Completed Project</a>
                </li>


                <!--

                        <li class="active">
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                        </li>
                    -->

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
<?php } else {
    header("location:supervisor_login.php");
}
?>