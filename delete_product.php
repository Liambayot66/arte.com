<?php
require 'connection.php';

// Check if product ID is provided
if(isset($_POST['productId'])) {
    // Sanitize the input to prevent SQL injection
    $productId = mysqli_real_escape_string($conn, $_POST['productId']);

    // Prepare a delete statement
    $sql = "DELETE FROM products WHERE id = '$productId'";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "Product ID is not provided";
}

// Close connection
$conn->close();
?>
