<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB-Technology</title>
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


    /* Container */
   

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


    /* Title */
    .title {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        color: #555;
        margin-bottom: 10px;
        position: relative;
    }

    .title::after {
        content: "";
        display: block;
        width: 80px;
        height: 2px;
        background-color: #555;
        margin: 5px auto 15px;
    }

    /* Headings */
    h2 {
        color: #0d6efd;
        font-size: 20px;
        margin-bottom: 8px;
    }

    /* Paragraphs */
    p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }

        .title {
            font-size: 24px;
        }

        h2 {
            font-size: 18px;
        }

        p {
            font-size: 14px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <a href="./sp.php" class="back-button">&larr; Go Back</a>
        <h1 class="title">SB-TECHNOLOGY</h1>
        <section>
            <h2>Advance Out-fitting and Painting</h2>
            <p>CSL has introduced the latest Japanese Integrated Material Management concept in which the basic design
                stage itself not only all high value and long lead items that go into the ships are identified, but also
                the method of outfitting viz. Unit/On block/On board is also finalized. Portable painting sheds are used
                for efficient and fast painting of the hull blocks.</p>
        </section>

        <section>
            <h2>Tie ups</h2>
            <p>The tie-up with the renowned shipbuilder M/s Ishikawajima Harima Heavy Industries (IHI), Japan and with
                Shipping Research Services (SRS), Norway for building Crude Oil Tankers have provided exposure to the
                latest shipbuilding technology adopted in Japan and Europe and hence the confidence to take up more
                challenging jobs.</p>
        </section>

        <section>
            <h2>Tribon based in-house capabilities</h2>
            <p>CSL uses the 'state of the art' TRIBON shipbuilding package for undertaking basic design, structural,
                machinery and electrical design. With over 80 workstations, and fully trained personnel, CSL has
                world-class capabilities to undertake ship designs. 3D hull, piping and electrical models are created
                leading to error-free and optimum ship designs. Information for various NC equipment are also generated
                on these systems.</p>
        </section>

        <section>
            <h2>Quality Control and Testing Laboratory</h2>
            <p>From the very inception of the yard itself, strict quality control techniques had been adopted. As a
                result, quality of the ships constructed at CSL have been very good and lauded by ship owners and
                classification societies. CSL has in its premises a well-equipped laboratory capable of undertaking all
                NDT tests. The laboratory is approved by various classification societies.</p>
        </section>

        <section>
            <h2>Marine Coating Shop</h2>
            <p>Four Nos. Blast / Paint Shops of size 20 x 20 x 11 m are equipped for blasting and painting of fabricated
                units in controlled and favourable ambient conditions. Blasting using graded copper slag and Painting
                using modern air-less spray painting machines are carried out to provide the most effective coatings on
                steel structures. The entire methodology, process and finished surface are checked and vetted by
                well-qualified and experienced personnel from CSL and the paint manufacturer.</p>
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