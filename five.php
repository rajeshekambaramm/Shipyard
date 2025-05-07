<?php //error_reporting(0);
include('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financials - CSL</title>
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
       
       

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #444;
            text-transform: uppercase;
        }

        .financials {
            display: flex;
            align-items: center;
            justify-content: center;
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
            max-width: 500px;
        }

        .content p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .financial-reports {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .financials {
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

    <header>
        <h1>FINANCIALS</h1>
    </header>

    <section class="financials">
        <div class="image-container">
            <img src="./img/Supervisor3.jpg" alt="Financials Image">
        </div>
        <div class="content">
            <p>
                As the biggest shipyard in India, CSL believes not only in the quantity of
                products and services but also in the value. The performance and increase in
                aggregate productivity of CSL are clearly visible in the financial statements.
            </p>
            <a href="#" class="financial-reports">📄 Financial Reports</a>
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