<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB Facility</title>
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
    <?php include_once('includes/header.php');?>    <style>
        /* General Styles */



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

/* Titles and Headings */
.title {
    text-align: center;
    font-size: 28px;
    color: #222;
    text-transform: uppercase;
}

.line {
    color: #007BFF;
    border-bottom: 2px solid #007BFF;
    padding-bottom: 5px;
}

/* Paragraphs and Lists */
p {
    line-height: 1.6;
    font-size: 16px;
}

ul {
    list-style: disc inside;
    padding-left: 15px;
}

li {
    margin-bottom: 5px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        width: 90%;
        padding: 15px;
    }
}

    </style>
</head>
<body>
    <div class="container"><br>
        <a href="./sp.php" class="back-button">&larr; Go Back</a>
        <h1 class="title">SB-FACILITY</h1>
        
        <section>
            <h2 class="line">Dock No 2</h2>
            <p>The Dock No.2 of 255 x 43 x 9 M is available for building ships up to 1,10,000 DWT. This dock and the grand assembly area are served by two Gantry crane (300 T and 150 T) and two LLTT cranes (50 T).</p>
        </section>
        
        <section>
            <h2 class="line">Steel Stock Yard</h2>
            <p>The steel stockyard has an area of 13,000 Sq.M. aided with two gantry cranes of 25T each and one semi-gantry crane of 25 T. It is directly linked to the rail lines as well as to the waterfront, in addition to road connections. This enables steel to be brought in through wagons, barges or trucks.</p>
        </section>

        <section>
            <h2 class="line">Hull Shop</h2>
            <p>The Hull Shop is self-contained with infrastructure required for fabrication of hull blocks up to 50 T. The shop is provided with EOT cranes (50 T) for along the bay movements and gantry crane (20 T) and trailers for across the bay transfer of materials.</p>
        </section>

        <section>
            <h2 class="line">Other Major Equipment/Facilities</h2>
            <ul>
                <li>C.N.C. Cutting Machine</li>
                <li>Plasma Cutting Machine</li>
                <li>Shot Blasting Machine</li>
                <li>Automatic Painting Machine</li>
                <li>1200 T Hydraulic Press</li>
                <li>Line Heating Techniques for curved shell formation</li>
                <li>F.C.B. One side welding for large panels</li>
                <li>Semi-automatic CO2, Gravity welding machines</li>
                <li>Electro Slag welding</li>
                <li>150mm Pipe Bending Machine</li>
                <li>Pipe Coaster (1.2 m dia capacity)</li>
                <li>150 tonne transporter</li>
            </ul>
        </section>
        
        <section>
            <h2 class="line">Assembly Shop</h2>
            <p>This shop has a telescopic sliding roof with gantry cranes of 300 T and 150 T which spans over it and the building dock. Hull blocks up to 450 T can be jumboized here and erected in the building dock using the gantry crane. In addition, two 20 T capacity EOT cranes are there in the shop.</p>
        </section>

        <section>
            <h2 class="line">Pipe and Sheet Metal Shop</h2>
            <p>The pipe shop is provided with all the necessary equipment for bending, cutting, welding, and pickling of pipes. The sheet metal shop handles all the light steel fabrications, trunking, etc.</p>
        </section>

        <section>
            <h2 class="line">Quays</h2>
            <p>CSL has totally three Quays having almost a length of 1 KM.</p>
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
