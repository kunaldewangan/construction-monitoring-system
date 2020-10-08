<?php session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>SIH2020</title>
</head>

<body>
    <!--Navigation Bar-->
    <?php include 'navigation.php'; ?>
    <?php
    if (isset($_REQUEST['msg'])) { ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5>successfully loggedout. <a href="login.php">Login again?</a></h5>
                </div>
            </div>
        </div>

    <?php } ?>

    <!--Image banner-->


    <div>
	<img src="includes/images/banner.jpg" alt="banner">
    </div>

    <div id="marquee" class="bg-info">
        <marquee><strong>This Website is built during Smart India Hackathon Software Edition 2020. It is a Management Information System For Monitoring Construction Work that comes under government schemes like Pradhan Mantri Aawas Yojna.</strong></marquee>
    </div>



    <div class="container-fluid">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        
                    
                    <h2>Construction Monitoring System</h2>
                    <p>
                   <h4> Role of our project: </h4>
                     There is no online platform to manage and overview the progress of construction
                      in places like sikkim for government schemes like Garib awaas yojna, 
                       so our project is a particular
                      management information system for monitoring construction work with proper flow of 
                       information including real time image and location of the place of construction. <br/>
                    <h4> Benefits to the society:- </h4>
                       The project if applied practically will reduce the hassle offline work 
                       for approval of money for schemes like Garib Awas Yojna.
                        Also, the beneficiary will be able to see the realtime 
                        progress of the construction of their homes. 
                       It is time saving and all the data will be securely stored in database.
                    <h4> Main Entities: </h4>
                     <ul>
                     <li> Supervisor </li>
                     <li> Contractor </li>
                     <li> User (beneficiary) </li>
                     </ul>
                     

                    </p>
                    </div>
                </div>
            </div>
        
    </div>

    <!--Footer-->
    <footer id="footer">
        <p>
            Copyright © Demo Project under Smart India Hackathon Software Edition 2020.
        </p>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>