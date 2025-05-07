<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ship Building | Cochin Shipyard</title>
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"><!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <?php include_once('includes/header.php');?>
    <style>
    h2 {
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .back-button {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 15px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .back-button:hover {
        background-color: #0056b3;
    }

    .img-fluid {
        max-height: 350px;
        object-fit: cover;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    .points li::before {
        content: "•";
        color: #007bff;
        margin-right: 5px;
    }

    header {
        text-align: center;
    }

    .back-button {
        display: inline-block;
        margin: 20px auto;
        padding: 10px 15px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .back-button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>

    <!-- Navigation & Breadcrumb -->
    <header>
        <a href="./sp.php" class="back-button">&larr; Go Back</a>
    </header>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2 class="text-center">SHIP BUILDING</h2>
        <div class="row mt-4">
            <div class="col-lg-6">
                <img src="./img/shipping.jpg" class="img-fluid rounded shadow" alt="Ship Building">
            </div>
            <div class="col-lg-6">
                <p>
                    CSL, the first Greenfield and presently the most modern shipbuilding yard in India, has an enviable
                    reputation for building high-quality ships.
                    Cochin Shipyard, with its proven expertise, is perfectly positioned to offer a flexible range of
                    products such as:
                </p>
                <ul class="points">
                    <li>Tankers</li> 
                    <li>Product Carriers</li>
                    <li>Bulk Carriers</li>
                    <li>Passenger Vessels</li>
                    <li>High Bollard Pull Tugs</li>
                    <li>Air Defence Ship</li>
                </ul>
            </div>
        </div>

        <!-- Buttons -->
        <div class="text-center mt-4">
            <a href="./sb-technology.php" class="btn btn-primary">TECHNOLOGY</a>
            <a href="./sb-facility.php" class="btn btn-primary">FACILITY</a>
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