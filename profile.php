<?php
// Include the database configuration file
include("config.php");

// Assume the user is logged in, and you have their user ID stored in $userId
$userId = 1; // Replace with the actual user ID

// Prepare the SQL statement to select user data by ID
$stmt = $db->prepare("SELECT * FROM users WHERE id = :userId");

// Bind parameters
$stmt->bindParam(":userId", $userId);

// Execute the statement
$stmt->execute();

// Fetch the user data
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if user data was found
if ($user) {
    // Display user data on the page
    echo "<h1>Welcome, {$user['name']}!</h1>";
    echo "<p>Email: {$user['email']}</p>";
    // Add more profile information as needed
} else {
    echo "User not found.";
}
?>
