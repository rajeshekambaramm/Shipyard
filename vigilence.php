<?php //error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Low Value Contracts & Tenders</title>
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
    <link href="./css/style.css" rel="stylesheet">
    <?php include_once('includes/header.php');?>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .top-container {
        text-align: center;
        padding: 0px;
        background: #fff;
    }

    .go-back {
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
    }

    .go-back:hover {
        background-color: #0056b3;
    }

    .title-container {
        text-align: center;
        font-size: 22px;
        font-weight: bold;
        margin: 20px 0;
        width: 100%;
    }

    .container {
        display: flex;
        padding: 10px 70px;
    }

    .sidebar {
        width: 300px;
        background-color: #fff;
        padding: 10px;
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar a {
        display: block;
        padding: 10px;
        color: #333;
        text-decoration: none;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #e0e0e0;
    }

    .sidebar a.active {
        background-color: #007bff;
        color: white;
    }

    .content {
        flex-grow: 1;
        padding: 30px;
        background: white;
    }

    table {
        width: 60%;
        /* Adjust width so both tables fit in one row */
        border-collapse: collapse;
        background: white;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    @media (max-width: 768px) {
        .table-container {
            flex-direction: column;
            /* Stack tables on smaller screens */
        }

        table {
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
    </style>
</head>

<body>

    <!-- Go Back Button at the Top -->
    <div class="top-container"><br>
        <a href="./index.php" class="back-button">&larr; Go Back</a>
    </div>

    <!-- Title Centered -->
    <div class="title-container">Low Value Contracts & Tenders</div>

    <div class="container">
        <div class="sidebar">
            <a href="#" class="active">Low Value Contracts & Tenders</a>
            <a href="#">High Value Contracts & Tenders</a>
            <a href="#">Subcontractors Registration</a>
            <a href="#">Contact Us</a>
            <a href="#">Central Vigilance Commission</a>
            <a href="#">Integrity Pact & IEM</a>
            <a href="#">Public Interest Disclosures</a>
            <a href="#">Whistle Blower Policy</a>
        </div>
        <div class="content">
            <div class="table-container">
                <!-- First Table -->
                <table>
                    <tr>
                        <th>Sl No.</th>
                        <th>PO Date</th>
                        <th>Tender No/File No</th>
                        <th>Enquiry Date</th>

                        <th>Item/Nature of Work</th>
                        <th>Mode of Tender Enquiry</th>
                        <th>Contract No</th>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2025-02-01</td>
                        <td>PROJ/ISRF/81/2025</td>
                        <td>2025-01-23</td>
                        <td>Replacement of ECM for DG set at ISRF-CoPA</td>
                        <td>Original Equipment Manufacturer</td>
                        <td>PROJ/ISRF/ dtd 01.02.2025</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2025-01-23</td>
                        <td>CSL/U&M/MRS/CONT/031/2024/24</td>
                        <td>2024-12-28</td>
                        <td>Repair/Servicing of Dry type Transformers</td>
                        <td>Original Equipment Manufacturer</td>
                        <td>U&M/MRS/ dated 23.01.2025</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2025-01-19</td>
                        <td>U&M/SER/QTN/1058/24-25</td>
                        <td>2024-12-17</td>
                        <td>Liaisoning work to obtain License of CNG Dispensing Unit</td>
                        <td>Open Tender Enquiry</td>
                        <td>UMM / 4080 19.01.2025</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>2024-07-01</td>
                        <td>PROJ/ISRF/81/2025</td>
                        <td>2025-01-23</td>
                        <td>Replacement of ECM for DG set at ISRF-CoPA</td>
                        <td>Original Equipment Manufacturer</td>
                        <td>PROJ/ISRF/ dtd 01.02.2025</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2023-11-23</td>
                        <td>CSL/U&M/MRS/CONT/031/2024/24</td>
                        <td>2024-12-28</td>
                        <td>Repair/Servicing of Dry type Transformers</td>
                        <td>Original Equipment Manufacturer</td>
                        <td>U&M/MRS/ dated 23.01.2025</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>2022-10-19</td>
                        <td>U&M/SER/QTN/1058/24-25</td>
                        <td>2024-12-17</td>
                        <td>Liaisoning work to obtain License of CNG Dispensing Unit</td>
                        <td>Open Tender Enquiry</td>
                        <td>UMM / 4080 19.01.2025</td>
                    </tr>


                </table>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php include_once('includes/footer.php'); ?>

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