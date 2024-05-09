<?php
session_start(); // Start session to access cart data

// Include database configuration
require 'connection.php';

// Function to sanitize user input
function sanitize($data) {
    global $conn;
    return htmlspecialchars(mysqli_real_escape_string($conn, $data));
}

if(isset($_POST['order_btn'])){
    // Validate and sanitize form inputs
    $name = sanitize($_POST['name']);
    $number = sanitize($_POST['number']);
    $email = sanitize($_POST['email']);
    $method = sanitize($_POST['method']);
    $flat = sanitize($_POST['flat']);
    $street = sanitize($_POST['street']);
    $city = sanitize($_POST['city']);
    $state = sanitize($_POST['state']);
    $country = sanitize($_POST['country']);
    $pin_code = sanitize($_POST['pin_code']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format
        // Handle error or redirect back to checkout page with error message
        header("Location: checkout.php?error=invalid_email");
        exit();
    }

    // Calculate total price of products in the cart
    $total_price = 0;
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        // Fetch product details from database
        $product_query = mysqli_query($conn, "SELECT * FROM products WHERE id = '$product_id'");
        if(mysqli_num_rows($product_query) > 0) {
            $product = mysqli_fetch_assoc($product_query);
            $total_price += $product['price'] * $quantity;
        }
    }

    // Insert order details into database
    $insert_order_query = mysqli_query($conn, "INSERT INTO orders (name, number, email, method, flat, street, city, state, country, pin_code, total_price) VALUES ('$name', '$number', '$email', '$method', '$flat', '$street', '$city', '$state', '$country', '$pin_code', '$total_price')");

    if($insert_order_query) {
        // Clear cart after successful order
        unset($_SESSION['cart']);
        // Redirect to thank you page with order details
        header("Location: thank_you.php?total_price=$total_price");
        exit();
    } else {
        // Order insertion failed
        // Handle error or redirect back to checkout page with error message
        header("Location: checkout.php?error=order_failed");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
</head>
<body>

<h1>Complete Your Order</h1>
<form action="" method="post">
   <label for="name">Name:</label>
   <input type="text" id="name" name="name" required><br><br>
   
   <label for="number">Phone Number:</label>
   <input type="text" id="number" name="number" required><br><br>
   
   <label for="email">Email:</label>
   <input type="email" id="email" name="email" required><br><br>
   
   <label for="method">Payment Method:</label>
   <select id="method" name="method">
      <option value="cash">Cash on Delivery</option>
      <option value="credit">Credit Card</option>
      <option value="paypal">PayPal</option>
   </select><br><br>
   
   <label for="flat">Flat/House No.:</label>
   <input type="text" id="flat" name="flat" required><br><br>
   
   <label for="street">Street Name:</label>
   <input type="text" id="street" name="street" required><br><br>
   
   <label for="city">City:</label>
   <input type="text" id="city" name="city" required><br><br>
   
   <label for="state">State:</label>
   <input type="text" id="state" name="state" required><br><br>
   
   <label for="country">Country:</label>
   <input type="text" id="country" name="country" required><br><br>
   
   <label for="pin_code">Pin Code:</label>
   <input type="text" id="pin_code" name="pin_code" required><br><br>
   
   <button type="submit" class="checkout-button" name="order_btn">Check Out</button>
</form>

</body>
</html>
