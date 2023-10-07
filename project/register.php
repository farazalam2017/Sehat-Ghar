<?php
// Include the database connection code here
// Replace with your actual database connection code
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "sehatghar_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize user input
    $full_name = filter_var($full_name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $hashed_password);

    if ($stmt->execute()) {
        // Registration successful
        // You can redirect to a login page or display a success message here
    } else {
        // Registration failed
        // Handle the error, such as displaying an error message
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
