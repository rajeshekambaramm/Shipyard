<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SERVICE AND PRODUCTS</title>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <?php include_once('includes/header.php');?>
    <style>
        h2 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            position: relative;
        }
        .service-card {
            background: #fff;
            padding: 20px;
            margin: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease-in-out;
        }
        .service-card:hover {
            transform: scale(1.05);
        }

        .service-card h4 {
            border-left: 4px solid #007bff;
            padding-left: 10px;
            font-weight: bold;
        }

        .service-card p {
            font-size: 14px;
            color: #555;
        }
        .btn {
            background-color: #007bff;
            border: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }


    </style>
</head>

<body>
<div class="container mt-5">
        <h2 class="text-center">SERVICE AND PRODUCTS</h2>
        <div class="row mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h4>Ship Building</h4>
                    <p>CSL, the first Greenfield and presently the most modern shipbuilding yard in India, has an
                        enviable reputation...</p>
                    <a href="./one.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h4>Ship Repair</h4>
                    <p>CSL started offering ship repair services in 1982 and has undertaken upgrades and repairs for all
                        types...</p>
                    <a href="./three.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h4>Marine Engineering</h4>
                    <p>The Marine Engineering Training Institute (METI) commenced the Graduate Mechanical Engineers
                        (GME) Course...</p>
                    <a href="./two.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h4>Facilities</h4>
                    <p>CSL has always focused on the continuous and sustainable improvisation of infrastructure, which
                        is key to...</p>
                    <a href="./four.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h4>Financials</h4>
                    <p>As the biggest shipyard in India, CSL believes not only in the quantity of products and services
                        but also...</p>
                    <a href="./five.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>


   
    <!-- Footer Start -->
    <?php include_once('includes/footer.php');?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>