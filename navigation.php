<!--Navigation-->
<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-light">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">

				<h3>SIH2020 | MIS</h3>
				<!--
                <img src="includes/images/logo.jpg" alt="logo" style="width:50px">
				-->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MyNavContent">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="MyNavContent">
        

        <ul class="nav navbar-nav">
               

               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login<i class="fas fa-user fa-fw"></i></a>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                       <a class="dropdown-item" href="admin/user/user_login.php">User</a>
                       <a class="dropdown-item" href="admin/contractor/contractor_login.php"">Contractor</a>
                       <a class="dropdown-item" href="admin/supervisor/supervisor_login.php"">Supervisor</a>
                       

                   </div>

               </li>
           </ul>


    </div>
</nav>