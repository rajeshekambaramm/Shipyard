<?php
session_start(); // Start session to store messages

$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "cwmsdb";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : "";
$contact = isset($_POST['contact']) ? trim($_POST['contact']) : "";
$bid_amount = isset($_POST['bid_amount']) ? (float) $_POST['bid_amount'] : 0;
$uploadDir = "uploads/";  
$uploadedFiles = [];

// Check if tender is already submitted
$checkQuery = "SELECT id FROM tender_applications WHERE name = ? AND contact = ?";
$stmt = $conn->prepare($checkQuery);
if (!$stmt) {
    die("Query preparation failed: " . $conn->error);
}
$stmt->bind_param("ss", $name, $contact);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $_SESSION['message'] = "You have already submitted a tender application!";
    $_SESSION['message_type'] = "error";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
$stmt->close();

// Handle file uploads
if (!empty($_FILES['documents']['name'][0])) {
    foreach ($_FILES['documents']['tmp_name'] as $key => $tmp_name) {
        $filename = basename($_FILES['documents']['name'][$key]);
        $targetFilePath = $uploadDir . time() . "_" . $filename;
        
        if (move_uploaded_file($tmp_name, $targetFilePath)) {
            $uploadedFiles[] = $targetFilePath;
        } else {
            $_SESSION['message'] = "Error uploading files.";
            $_SESSION['message_type'] = "error";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }
}

// Convert uploaded file paths to a string
$documents = implode(",", $uploadedFiles);

// Insert query
$insertQuery = "INSERT INTO tender_applications (name, contact, bid_amount, documents) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($insertQuery);
if (!$stmt) {
    $_SESSION['message'] = "Query preparation failed: " . $conn->error;
    $_SESSION['message_type'] = "error";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
$stmt->bind_param("ssds", $name, $contact, $bid_amount, $documents);

if ($stmt->execute()) {
    $_SESSION['message'] = "Tender application submitted successfully!";
    $_SESSION['message_type'] = "success";
} else {
    $_SESSION['message'] = "Error: " . $stmt->error;
    $_SESSION['message_type'] = "error";
}

$stmt->close();
$conn->close();

// Redirect back to the previous page
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>