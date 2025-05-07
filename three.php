<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ship Repair - SB Technology</title>
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
        /* General Styles */
      
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        /* Title */
        .title {
            color: #004080;
            font-size: 32px;
            margin-bottom: 20px;
        }

        /* Content Layout */
        

        /* Image Section */
        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        /* Text Section */
        .text {
            text-align:justify;
            width:200%;
        }

        /* Headings */
        h2 {
            color: #004080;
            margin-top: 20px;
        }

        /* List */
        ul {
            list-style: square;
            padding-left: 20px;
        }

        ul li {
            margin: 10px 0;
        }

        /* Buttons */
        .buttons {
            margin-top: 20px;
        }

        .btn {
            background-color: #004080;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 5px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #002d5a;
        }

        /* Links */
        a {
            color: #004080;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
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
        <h1 class="title">SHIP REPAIR</h1>

        <div class="content">
            <div class="image">
                <img src="shipyard.jpg" alt="Shipyard">
            </div>
            <div class="text">
                <p>CSL started offering ship repair services in 1982 and has undertaken upgrades and repairs for all
                    types of ships, including ships for the oil exploration industry. CSL has extensive experience in
                    ship repair and has successfully completed more than 2500 ship repair projects for clients from the
                    Defense and Commercial sectors.</p>

                <p>CSL has closely associated with the Indian Navy for refits and maintenance of their fleet. It is the
                    only yard in India capable of undertaking dry dock repairs of Aircraft carriers owned by the Indian
                    Navy. CSL has successfully completed refits of <strong>INS Viraat</strong>, <strong>INS
                        Vikramaditya</strong>, and <strong>INS Vikrant</strong>. Apart from repairs and refits, CSL also
                    undertakes ship upgradation for the oil exploration industry, as well as periodical maintenance and
                    life extension services.</p>

                <h2>Geographical Expansion & Pan India Presence</h2>
                <p>In recent years, CSL has expanded its operations geographically and has dry-dock and associated
                    facilities across India. It is the only yard in India capable of providing ship repair services on
                    both the West and East Coasts of India.</p>

                <h2>Some Major Repair Projects</h2>
                <ul>
                    <li>Major upgrade of the Mobile Offshore Drilling Unit "<strong>Sagar Vijay</strong>" of ONGC.</li>
                    <li>The upgrade increased the drilling capacity of the vessel from 300M to 900M.</li>
                    <li>Maintenance and repairs to Aircraft Carriers: <strong>INS Viraat, INS Vikramaditya, INS
                            Vikrant</strong> of the Indian Navy.</li>
                    <li>Repair and maintenance of tankers and bulk carriers of the Shipping Corporation of India.</li>
                </ul>
                <!-- Buttons -->
                <div class="text-center mt-4">
                    <a href="./sr-facilities.php" class="btn btn-primary">FACILITY</a>
                    <a href="./sb-facility.php" class="btn btn-primary">EXPERTISE</a>
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