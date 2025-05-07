<?php error_reporting(0);
include('includes/config.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Tenders & Apply</title>
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
    .text {

        margin: 20px;
        padding: 0;
        text-align: center;
        background-color: rgb(255, 255, 255);
    }

    h2 {
        color: #004080;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #004080;
        color: white;
    }

    a {
        text-decoration: none;
        color: #004080;
        font-weight: bold;
    }

    h2 {
        color: #0056b3;
    }

    form {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #0056b3;
        border-radius: 8px;
        background-color: #e6f2ff;
        text-align: left;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
        color: #003366;
        display: block;
        margin-top: 10px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #0056b3;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #0056b3;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        width: 100%;
    }

    button:hover {
        background-color: #004494;
    }
    </style>
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <h2 class="text">Open Shipyard Tenders</h2>
    <table>
        <tr>
            <th>Tender Name</th>
            <th>Tender Description</th>
            <th>Deadline for Submission</th>
            <th>Bid Amount Range</th>
            <th>Download Documents</th>
        </tr>
        <tr>
            <td>Dockyard Infrastructure Upgrade</td>
            <td>Renovation of ship docking facilities</td>
            <td>March 20, 2025</td>
            <td>$500,000 - $1,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Ship Maintenance Contract</td>
            <td>Annual maintenance of naval vessels</td>
            <td>April 5, 2025</td>
            <td>$200,000 - $500,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>New Shipbuilding Project</td>
            <td>Construction of a new cargo ship</td>
            <td>April 25, 2025</td>
            <td>$10,000,000 - $15,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Port Expansion Initiative</td>
            <td>Expansion of docking capacity</td>
            <td>May 10, 2025</td>
            <td>$5,000,000 - $7,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Maritime Security Systems</td>
            <td>Installation of new security systems</td>
            <td>May 25, 2025</td>
            <td>$1,000,000 - $2,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Shipyard Equipment Procurement</td>
            <td>Purchase of cranes and heavy machinery</td>
            <td>June 15, 2025</td>
            <td>$2,500,000 - $4,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Naval Dock Repair</td>
            <td>Major repairs for naval docks</td>
            <td>June 30, 2025</td>
            <td>$3,000,000 - $6,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Harbor Dredging Operations</td>
            <td>Deepening and maintenance of ship channels</td>
            <td>July 10, 2025</td>
            <td>$1,500,000 - $3,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Fuel Storage Facility Expansion</td>
            <td>Construction of new fuel storage units</td>
            <td>July 25, 2025</td>
            <td>$4,000,000 - $6,500,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Shipyard Workforce Training</td>
            <td>Skill development programs for workers</td>
            <td>August 5, 2025</td>
            <td>$500,000 - $1,000,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
        <tr>
            <td>Marine Waste Management</td>
            <td>Implementation of waste disposal systems</td>
            <td>August 20, 2025</td>
            <td>$1,000,000 - $2,500,000</td>
            <td><a href="Dummy.pdf">Download</a></td>
        </tr>
    </table>

    <h2 class="text">Apply for Tender</h2>
    <form action="submit_tender.php" method="POST" enctype="multipart/form-data">
        <label for="name">Company Name / Individual Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="contact">Contact Details:</label>
        <input type="text" id="contact" name="contact" required>

        <label for="bid_amount">Bid Amount:</label>
        <input type="number" id="bid_amount" name="bid_amount" required>

        <label for="documents">Upload Documents (Proposal, Certifications, etc.):</label>
        <input type="file" id="documents" name="documents" multiple required>

        <button type="submit">Submit</button>
    </form>

    <h2 class="text">Subscribe for Updates</h2>
    <form action="subscribe_notifications.php" method="POST">
        <label for="email">Subscribe via Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Subscribe via SMS:</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit">Subscribe</button>
    </form>

    <h2 class="text">Tender Status Updates</h2>
    <table>
        <tr>
            <th>Tender Name</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>Dockyard Upgrade</td>
            <td>Open</td>
        </tr>
        <tr>
            <td>Ship Maintenance</td>
            <td>Under Review</td>
        </tr>
        <tr>
            <td>New Shipbuilding</td>
            <td>Awarded</td>
        </tr>
    </table>

</body>
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
<!--  -->

<!-- Template Javascript -->
<script src="js/main.js"></script>

</html>