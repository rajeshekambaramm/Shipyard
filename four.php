<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - CSL</title>
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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    

    header {
        text-align: center;
        margin-bottom: 10px;
    }

    h1 {
        font-size: 24px;
        color: #444;
        text-transform: uppercase;
    }

    .facilities {
        display: flex;
        align-items: center;
        justify-content: left;
        gap: 20px;
        flex-wrap: wrap;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .image-container img {
        width: 100%;
        max-width: 400px;
        border-radius: 5px;
    }

    .content {
        max-width: 800px;
    }

    .content p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    ul {
        list-style-type: none;
    }

    ul li {
        
        font-size: 14px;
        padding: 5px 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .facilities {
            flex-direction: column;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
        }
    }

    /* Back Button */
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
    </style>
</head>

<body>
    <header><br>
        <a href="./sp.php" class="back-button">&larr; Go Back</a>

    </header>
    <section class="facilities">
        <div class="image-container">
            <img src="./img/drydocks1.jpeg" alt="Industrial Machine">
        </div>
        <div class="content">
            <p>
                CSL has always focused on the continuous and sustainable improvisation
                of the infrastructure, which is a key element in the quality and timely
                completion of the final products and services delivered.
            </p>
            <ul>
                <li>Plate Bending Roll</li>
                <li>Horizontal Boring Machine</li>
                <li>Lathes</li>
                <li>Drilling Machines</li>
                <li>Shaping Machine</li>
                <li>Vertical Milling Machine</li>
                <li>Plano Miller</li>
                <li>Horizontal Drilling Machine</li>
                <li>Dynamic Balancing Machines</li>
                <li>Grinding Machines</li>
                <li>Slotting Machine</li>
            </ul>
        </div>
    </section>
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