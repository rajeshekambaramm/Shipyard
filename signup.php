<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $companyName = $_POST['companyName'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO userlog (fullName, companyName, contactNumber, email, password) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullName, $companyName, $contactNumber, $email, $password);

    if ($stmt->execute()) {
        $success = "Signup successful! <a href='login.php'>Login here</a>";
    } else {
        $error = "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .auth-container {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 350px;
}

.auth-container h2 {
    margin-bottom: 20px;
    color: #333;
}

.auth-form {
    display: flex;
    flex-direction: column;
}

.auth-form label {
    text-align: left;
    margin-bottom: 5px;
    color: #555;
}

.auth-form input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.error-message {
    color: red;
    margin-bottom: 15px;
}

.signup-link {
    margin-top: 15px;
    color: #333;
}

.signup-link a {
    color: #007bff;
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}


    </style>
</head>

<body>
    <div class="auth-container">
        <h2>Sign Up</h2>

        <?php
        if (isset($success)) {
            echo "<p class='success-message'>$success</p>";
        }
        if (isset($error)) {
            echo "<p class='error-message'>$error</p>";
        }
        ?>

        <form method="post" class="auth-form">
            <label>Full Name:</label>
            <input type="text" name="fullName" required>

            <label>Company Name:</label>
            <input type="text" name="companyName" required>

            <label>Contact Number:</label>
            <input type="text" name="contactNumber" required>

            <label>Email Address:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>

        <p class="signup-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>

</html>