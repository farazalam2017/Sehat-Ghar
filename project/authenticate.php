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
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and sanitize user input
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Query the database to retrieve the user's hashed password
    $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify the provided password with the stored hash
        if (password_verify($password, $hashed_password)) {
            // Password is correct, create a session for the authenticated user
            session_start();
            $_SESSION["user_id"] = $user_id;

            // Redirect to a user dashboard or any other page
            header("Location: dashboard.php");
            exit();
        } else {
            // Password is incorrect
            // Handle the error, such as displaying an error message
            echo "Incorrect password. Please try again.";
        }
    } else {
        // User not found
        // Handle the error, such as displaying an error message
        echo "User not found. Please check your email address.";
    }

    $stmt->close();
    $conn->close();
}
?>
