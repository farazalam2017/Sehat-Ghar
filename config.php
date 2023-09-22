<?php
// Database configuration
$host = "your_database_host"; // Replace with your database host
$username = "your_database_username"; // Replace with your database username
$password = "your_database_password"; // Replace with your database password
$database = "your_database_name"; // Replace with your database name

try {
    // Create a PDO database connection
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set PDO error mode to exception for better error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle database connection errors gracefully
    die("Database connection failed: " . $e->getMessage());
}
?>
