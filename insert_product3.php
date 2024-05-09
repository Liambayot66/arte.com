<?php
// Establish database connection
require 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert products into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_names = $_POST['product_name'];
    $prices = $_POST['price'];
    $images = $_POST['image'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO products (product_name, price, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $product_name, $price, $image);

    // Insert each product
    for ($i = 0; $i < count($product_names); $i++) {
        $product_name = $product_names[$i];
        $price = $prices[$i];
        $image = $images[$i];
        $stmt->execute();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect back to the index page after products are inserted
    header("Location: kitchen.php");
    exit(); // Make sure to exit after redirection
}
?>
