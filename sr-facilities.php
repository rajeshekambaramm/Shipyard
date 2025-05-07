<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ship Repair Facilities</title>
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
    

   

    h1 {
        text-align: center;
        color: #333;
    }

    .facility {
        margin-bottom: 20px;
        padding: 15px;
        border-bottom: 2px solid #ddd;
    }

    h2 {
        color: #0073e6;
    }

    ul {
        padding-left: 20px;
    }

    @media (max-width: 768px) {
        .container {
            padding: 10px;
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
    <div class="container"><br>
        <a href="./sp.php" class="back-button">&larr; Go Back</a>
        <h1>SHIP REPAIR FACILITIES</h1>

        <section class="facility">
            <h2>CSL - Kochi</h2>
            <p>The repair dock of 270 x 45 x 12 M (Dock-1) can accommodate ships up to 1,25,000 DWT...</p>
            <h3>Quays</h3>
            <p>Total water frontage (Quays) of 1128 Mtrs is available...</p>
            <h3>Other Facilities</h3>
            <ul>
                <li>CSL is equipped with various types and capacity cranes ranging from 600, 300 & 150 T capacity...
                </li>
                <li>CSL has a full-fledged hull shop, machine shop, engine shop, electrical shop...</li>
            </ul>
        </section>

        <section class="facility">
            <h2>CSL-Mumbai Ship Repair Unit (CMSRU)</h2>
            <p>CSL has entered into a MoU agreement with Mumbai Port Trust...</p>
        </section>

        <section class="facility">
            <h2>CSL- Kolkata Ship Repair Unit (CKSRU)</h2>
            <p>CSL has entered into a MoU agreement with Kolkata Port Trust...</p>
        </section>

        <section class="facility">
            <h2>CSL- Andaman & Nicobar Ship Repair Unit (CANSRU)</h2>
            <p>CSL has entered into an agreement with Andaman & Nicobar administration...</p>
        </section>

        <section class="facility">
            <h2>International Ship Repair Facility (ISRF) at Cochin Port Premises</h2>
            <p>CSL has set up an International Ship Repair Facility (ISRF) equipped with ship lift & transfer system...
            </p>
        </section>
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