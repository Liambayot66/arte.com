<?php
require 'connection.php';

if(isset($_POST['order_btn'])){
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT product_name, price, image FROM `products`");
   $price_total = 0;
   $product_name = array();
   $product_image = array();
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['product_name'];
         $product_price = number_format($product_item['price']);
         $product_image[] = $product_item['image'];
         $price_total += $product_item['price'];
      };
   };
   
   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `orderss`(name, number, email, method, flat, street, city, state, country, pin_code, products_name, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');


   if($cart_query && $detail_query){
      ?>
      <div class="receipt-container">
         <div class="receipt">
            <h3>Thank you for shopping!</h3>
            <div class="order-detail">
               <span><?php echo $total_product; ?></span>
               <span class="total">Total: ₱<?php echo $price_total; ?>/-</span>
            </div>
            <div class="customer-details">
               <p>Your Name: <span><?php echo $name; ?></span></p>
               <p>Your Number: <span><?php echo $number; ?></span></p>
               <p>Your Email: <span><?php echo $email; ?></span></p>
               <p>Your Address: <span><?php echo $flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code; ?></span></p>
               <p>Your Payment Mode: <span><?php echo $method; ?></span></p>
               <p>(*Pay when product arrives*)</p>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="cart.php" class="btn">Continue Shopping</a>
         </div>
      </div>
      <?php
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
   <title>Checkout</title>
   <style>
      .receipt-container {
   position: fixed;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   background-color: #7B4F38; /* Coffee brown background color */
   border: 2px solid #54392D; /* Darker border */
   border-radius: 15px; /* Rounded corners */
   padding: 30px; /* Increased padding */
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Shadow effect */
   z-index: 1000;
   width: 80%; /* Make it larger */
   max-width: 600px; /* Maximum width */
   color: #fff; /* Text color */
}

.receipt h3 {
   color: #fff; /* Heading color */
   font-size: 28px; /* Increased font size */
}

.order-detail {
   margin-bottom: 30px; /* Increased margin */
}

.total {
   font-weight: bold;
   font-size: 20px; /* Increased font size */
}

.customer-details p {
   margin: 10px 0; /* Increased margin */
}

.customer-details span {
   font-weight: bold;
}

.btn {
   display: inline-block;
   padding: 15px 30px; /* Increased padding */
   background-color: #54392D; /* Darker brown button */
   color: #fff;
   text-decoration: none;
   border-radius: 8px; /* Rounded corners */
   transition: background-color 0.3s;
   font-size: 18px; /* Increased font size */
}

.btn:hover {
   background-color: #6C4E38; /* Darker brown on hover */
}

 body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5; /* Light brown background color */
    color: #333333; /* Dark text color */
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #f9f5f1; /* Light brown form background color */
    padding: 20px;
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
}

h1 {
    text-align: center;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
select {
    width: calc(100% - 22px); /* Adjusted width */
    padding: 8px; /* Adjusted padding */
    margin-bottom: 15px;
    border: 1px solid #b19f8e; /* Light brown border */
    border-radius: 5px; /* Rounded corners */
    font-size: 14px; /* Adjusted font size */
    background-color: #ede5db; /* Light brown input background color */
    color: #333333; /* Dark text color */
}

button[type="submit"] {
    background-color: #b19f8e; /* Light brown button color */
    color: #ffffff; /* White text color */
    padding: 12px 20px;
    border: none;
    border-radius: 5px; /* Rounded corners */
    cursor: pointer;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #9e8b7b; /* Darker shade of light brown */
}

button[type="submit"]:focus {
    outline: none;
}

button[type="submit"]:disabled {
    background-color: #d1c7be; /* Lighter shade of brown for disabled state */
    cursor: not-allowed;
}

   </style>
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
