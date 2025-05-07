<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shipyard | Home Page</title>


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
</head>

<body>

    <!--  index Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="./img/shipping.jpg" height="100px" width="1450px" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Build, repair, navigate, succeed</h3>
                        <h1>Crafted for ocean adventures</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- index End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <section class="facilities">
                    <h2 style="font-size: 45px; font-weight: 700;">Shipyard Facilities</h2>
                    <div class="facilities-container">
                        <div class="facility-card">
                            <a href="hotels.php">
                                <img src="./img/hotel1.jpeg" alt="Hotels">
                                <h3>Hotels</h3>
                            </a>
                        </div>
                        <div class="facility-card">
                            <a href="rooms.php">
                                <img src="./img/rooms1.jpeg" alt="Rooms">
                                <h3>Rooms</h3>
                            </a>
                        </div>
                        <div class="facility-card">
                            <a href="drydocks.php">
                                <img src="./img/drydocks1.jpeg" alt="Dry Docks">
                                <h3>Dry Docks</h3>
                            </a>
                        </div>
                        <div class="facility-card">
                            <a href="storage.php">
                                <img src="./img/storage1.jpeg" alt="Storage">
                                <h3>Storage</h3>
                            </a>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Shipyard Overview Start -->
    <section class="shipyard-overview">
        <div class="content">
            <h1 class="overview-title">Shipyard Overview</h1>
            <p>
                Our shipyard is equipped with state-of-the-art facilities, ensuring top-notch shipbuilding
                and maintenance services. With a highly skilled workforce and modern technology, we
                deliver excellence in marine engineering. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Totam, dolores tempora omnis explicabo exercitationem magnam. Voluptatibus, deleniti non, sint assumenda
                necessitatibus, nobis veritatis rerum ratione facilis repellendus adipisci iste fugit.
            </p>
        </div>
        <div class="image-container">
            <img src="./img/overview.jpg" alt="Shipyard">
        </div>
    </section>
    <!-- Shipyard Overview End -->

    <!-- Shipyard Overview End -->

    <section class="history-ownership">
        <div class="history-image">
            <img src="./img/history.jpg" alt="History">
        </div>
        <div class="ownership-content">
            <h1 class="ownership-title">History & Ownership</h1>
            <p>
                A shipyard is a facility where ships are built, repaired, and maintained. Shipbuilding dates back
                thousands of years, with early civilizations like the Egyptians, Greeks, and Romans constructing wooden
                vessels for trade and warfare. During the Industrial Revolution, shipyards transitioned to iron and
                steel ship construction, leading to modern shipbuilding techniques. Major shipyards are found in
                countries like China, South Korea, and the United States. Ownership varies, with some shipyards being
                state-owned for naval defense, while others are privately held for commercial shipbuilding. Today,
                shipyards play a crucial role in global trade, defense, and maritime innovation.
            </p>
        </div>
    </section>

    <!-- Shipyard Overview End -->
    <!-- Map section start -->
    <section class="map-section">
        <h2 class="map-title">Shipyard Map</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;"
                allowfullscreen></iframe>
        </div>
    </section>
    <!-- Map section end -->


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