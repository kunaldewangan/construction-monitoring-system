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
        <marquee><strong>Welcome To Pradhan Mantri Aawas Yojna.This Website is built during Smart India Hackathon Software Edition. It is a Management Information System For Monitor Construction Work that comes under Pradhan Mantri Aawas Yojna.</strong></marquee>
    </div>



    <div class="container-fluid">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        
                    
                    <h2>Pradhan Mantri Awas Yojana (Urban)</h2>
                    <p>
                        Pradhan Mantri Awas Yojana (Urban) Mission launched on 25th June 2015 which intends to provide housing for all in urban areas by year 2022. The Mission provides Central Assistance to the implementing agencies through States/Union Territories (UTs) and Central Nodal Agencies (CNAs) for providing houses to all eligible families/ beneficiaries against the validated demand for houses for about 1.12 cr. As per PMAY(U) guidelines, the size of a house for Economically Weaker Section (EWS) could be upto 30 sq. mt. carpet area, however States/UTs have the flexibility to enhance the size of houses in consultation and approval of the Ministry.
In continuation to this Government’s efforts towards empowerment of women from EWS and LIG unlike earlier schemes, PMAY (U) has made a mandatory provision for the female head of the family to be the owner or co-owner of the house under this Mission. Verticals of PMAY (Urban) A basket of options is adopted to ensure inclusion of a greater number of people depending on their income, finance and availability of land through following four options....
                    </p>
                    </div>
                </div>
            </div>
        
    </div>

    <!--Footer-->
    <footer id="footer">
        <p>
            Copyright © Pradhan Mantri Aawas Yojna.Smart India Hackathon Software Edition 2020. All Rights
            Reserved􀆉 and 􀆈Contact Us: +91 90000 00000
        </p>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>