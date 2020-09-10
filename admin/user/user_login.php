<?php
if (!isset($_SESSION['user'])) { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style type="text/css">

        </style>
        <title>User Login</title>
    </head>

    <body>
        
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-light">
            <div class="container">
                <div class="navbar-header">
                    <a href="user_login.php" class="navbar-brand">CMS | User Login</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MyNavContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="MyNavContent">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a href="../../index.php" class="nav-link">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="margin:20px;">
                <div class="col-md-12"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php if (isset($_REQUEST['msg'])) {

                        echo "<h5 class='pb-2'>logout successfully!!</h5>";
                    }

                    ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="user_login_script.php" method="POST">
                                <h2>Login</h2>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="user_name" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="user_password" placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-primary" name="user_login" value="Login">
                            </form>

                        </div>
                    </div>

                </div>

                <div class="col-md-4"></div>
            </div>
        </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>
<?php  } else {
    header("location:index.php");
}

?>