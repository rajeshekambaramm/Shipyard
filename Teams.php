<?php //error_reporting(0);
include('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>shipyard | Teams</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

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
    <style>
    /* General styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    /* Head Officers Section */
    .head-officers {
        text-align: center;
        padding: 50px 20px;
        background-color: white;
    }

    .head-officers h2 {
        font-size: 2em;
        margin-bottom: 20px;
        color: #333;
    }

    /* Officers container */
    .officers-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    /* Individual officer */
    .officer {
        background: #fff;
        padding: 20px;
        flex-basis: calc(33.33% - 20px);
        /* Ensures 3 per row */
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .officer img {
        width: 250px;
        height: 250px;
        border-radius: 10px;
        object-fit: cover;
    }

    .officer p {
        font-size: 14px;
        color: #555;
        margin-top: 10px;
        line-height: 1.4;
        text-align: justify;
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .officer {
            flex-basis: 100%;
            /* Stack in one column for small screens */
        }
    }


    .officers-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .officer {
        background: #fff;
        padding: 20px;
        flex: 1 1 calc(33.33% - 20px);
        /* Ensures 3 per row */
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 350px;
        /* Prevents officers from stretching too wide */
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .officer {
            flex: 1 1 calc(50% - 20px);
            /* 2 per row on medium screens */
        }
    }

    @media (max-width: 600px) {
        .officer {
            flex: 1 1 100%;
            /* 1 per row on small screens */
        }
    }
    </style>

</head>

<body>

    <?php include_once('includes/header.php');?>

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="col-12">
            <h2>Team Members</h2>
        </div>

    </div>

    <!-- Page Header End -->


    <!-- Team members start -->
   

    <body>
        <section class="history-ownership">
            <div class="history-image">
                <img src="./img/president.jpg" alt="History">
            </div>
            <div class="ownership-content">
                <h1 class="ownership-title">President</h1>
                <p>
                    Our company has a rich history spanning decades, marked by innovation and commitment to excellence.
                    Established with the vision of leading the industry, we have grown to become a trusted name.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, debitis, repellendus,
                    expedita doloribus nesciunt dicta harum molestiae fugit voluptate reprehenderit nemo.
                    Dignissimos repellendus quos aspernatur ipsa suscipit, molestias obcaecati exercitationem!
                </p>
            </div>
        </section>

        <!-- Head Officers -->
        <section class="head-officers">
            <h2>Meet Our Head Officers</h2>
            <div class="officers-container">
                <div class="officer">
                    <img src="./img/officer1.jpg" alt="Officer 1">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/officer2.jpg" alt="Officer 2">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/officer3.jpg" alt="Officer 3">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
            </div>
        </section>

        <!-- Managers -->
        <section class="head-officers">
            <h2>Meet Our Managers</h2>
            <div class="officers-container">
                <div class="officer">
                    <img src="./img/Manager1.jpg" alt="Officer 1">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Manager2.jpg" alt="Officer 2">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Manager3.jpg" alt="Officer 3">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
            </div>
        </section>

        <!-- Additional Section -->
        <section class="head-officers">
            <h2>Meet Our Supervisors</h2>
            <div class="officers-container">
                <div class="officer">
                    <img src="./img/Supervisor1.jpg" alt="Officer 1">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Supervisor2.jpg" alt="Officer 2">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Supervisor3.jpg" alt="Officer 3">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Supervisor4.jpg" alt="Officer 4">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Supervisor5.jpg" alt="Officer 5">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Supervisor6.jpg" alt="Officer 6">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
            </div>
        </section>

        <section class="head-officers">
            <h2>Meet Our Lead Engineers</h2>
            <div class="officers-container">
                <div class="officer">
                    <img src="./img/Engineer1.jpg" alt="Officer 1">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer2.jpg" alt="Officer 2">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer3.jpg" alt="Officer 3">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer4.jpg" alt="Officer 4">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer5.jpg" alt="Officer 5">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer6.jpg" alt="Officer 6">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer7.jpg" alt="Officer 7">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
                <div class="officer">
                    <img src="./img/Engineer8.jpg" alt="Officer 8">
                    <p>Vestibulum at felis id mi dignissim scelerisque. Sed laoreet augue id justo lacinia, ac laoreet
                        lacus gravida. Proin vehicula mauris sed tellus consequat, sed ultricies arcu bibendum.</p>
                </div>
            </div>
        </section>
    </body>

    </html>
    <!-- Team members ending -->









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