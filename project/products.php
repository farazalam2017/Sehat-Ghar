<?php
// Include the database configuration file
include("config.php");

// Prepare the SQL statement to select all products
$stmt = $db->prepare("SELECT * FROM products");

// Execute the statement
$stmt->execute();

// Fetch all products as an associative array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Check if products were found
if ($products) {
    // Display the list of products
    echo "<h2>Our Products</h2>";
    echo "<ul>";
    foreach ($products as $product) {
        echo "<li>{$product['name']} - Price: {$product['price']} USD</li>";
    }
    echo "</ul>";
} else {
    echo "No products found.";
}
?>
