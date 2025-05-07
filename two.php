<?php //error_reporting(0);
include('includes/config.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marine Engineering</title>
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
    /* Reset Styles */

    body {
        background-color: #f8f9fa;
        color: #333;
        text-align: center;
        padding: 20px;
    }

    /* Header */
    header {
        text-align: left;
        margin-bottom: 20px;
    }

    .back-link {
        display: inline-block;
        color: #004a99;
        text-decoration: none;
        font-weight: bold;
        margin-bottom: 10px;
    }

    nav {
        font-size: 14px;
        color: gray;
    }

    /* Main Content */
    h1 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 20px;
        max-width: 900px;
        margin: 0 auto;
        text-align: left;
    }

    .content img {
        width: 45%;
        max-width: 400px;
        border-radius: 5px;
    }

    .text {
        width: 50%;
    }

    .text p {
        margin-bottom: 10px;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 5px;
    }

    .pdf-link {
        color: #d9534f;
        text-decoration: none;
        font-weight: bold;
    }

    .pdf-link:hover {
        text-decoration: underline;
    }

    /* Footer */
    footer {
        background-color: #007bff;
        color: white;
        padding: 20px;
        margin-top: 30px;
    }

    button {
        background-color: white;
        color: #007bff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        border-radius: 5px;
    }

    button:hover {
        background-color: #0056b3;
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content img,
        .text {
            width: 100%;
        }

        h1 {
            font-size: 20px;
        }

        button {
            width: 100%;
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

    <header>
        <a href="./sp.php" class="back-button">&larr; Go Back</a>

    </header>

    <main>
        <h1>MARINE ENGINEERING</h1>

        <div class="content">
            <img src="./img/overview.jpg" alt="Marine Engineering Training Institute">
            <div class="text">
                <p>
                    The Marine Engineering Training Institute (METI) commenced the Graduate Mechanical Engineers (GME)
                    Course in 1993.
                    This 12-month course is mandatory for continuing with the 6-month Shipboard training prior to
                    appearing for Class IV Certificate
                    of Competency exam (MEO Class-IV) to become an Officer in charge of an Engineering Watch in a manned
                    engine room or as a
                    designated duty engineer in a periodically unmanned engine room of Merchant Ships.
                </p>
                <ul>
                    <li><strong>DGM Training / SD&METI:</strong> 0484 2926263</li>
                    <li><strong>HOD METI:</strong> 0484 2926264</li>
                    <li><strong>Hostel Warden:</strong> 0484 2926265</li>
                </ul>
                <a href="Dummy.pdf" class="pdf-link" download="./Dummy.pdf">📄 Read More (PDF File - 1.53 MB)</a>
            </div>
        </div>
    </main>

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