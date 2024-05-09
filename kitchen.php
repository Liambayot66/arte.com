
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte: Furnitures</title>
    <link rel="stylesheet" href="css\kitchen.css">
    <link rel="icon" type="image/png" href="..\images\Arte Logo.jpeg"/>
</head>
<style>
    

.logout-btn {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px; /* Add padding */
    background-color: #8B4513; /* Brown background color */
    color: #fff; /* White text color */
    border: none; /* Remove border */
    border-radius: 5px; /* Add rounded corners */
    cursor: pointer; /* Show pointer cursor on hover */
    transition: background-color 0.3s; /* Smooth transition for background color change */
}

.logout-btn:hover {
    background-color: #A0522D; /* Darker brown color on hover */
}

</style>
<body>
    

<form id="logout-form" action="logout.php" method="post">
    <button type="submit" class="logout-btn">Logout</button>
</form>

<script>
document.querySelector('.logout-btn').addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default form submission

    if (confirm("Are you sure you want to log out?")) {
        document.getElementById('logout-form').submit(); // If user confirms, submit the form
    } else {
        // If user cancels, do nothing
    }
});
</script>
    <div class="space"></div>
    <header class="header">
        <img src="images\received_1297213491195542.jpeg" alt="Logo" class="logo">
        <nav class="nav"> 
            <p class="choice home"><a href="dashboared.php">HOME</a></p>
            <p class="choice lr-bar"><a href="livingroom.php">LIVING ROOM</a></p>
            <p class="choice kitchen-bar"><a href="kitchen.php">KITCHEN</a></p>
            <p class="choice br-bar"><a href="bedroom.php">BEDROOM</a></p>
            <p class="choice br-bar"><a href="cart.php">CART</a></p>
        </nav>
    </header>
    <section class="homedecor">
        <h1>KITCHEN</h1>
    </section>

    <main class="product">


    <form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\plates3.jpg" alt="Plates" class="item kit">
        <h2>Golden Rim Plates</h2>
        <h3>P120</h3>
        <input type="hidden" name="product_name[]" value="Golden Rim Plates">
        <input type="hidden" name="price[]" value="120">
        <input type="hidden" name="image[]" value="images\plates3.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>

<form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\utensils.jpg" alt="Spoon & Fork" class="item kit">
        <h2>Spoon & Forks(Set)</h2>
        <h3>P300</h3>
        <input type="hidden" name="product_name[]" value="Spoon & Forks(Set)">
        <input type="hidden" name="price[]" value="300">
        <input type="hidden" name="image[]" value="images\utensils.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>

<form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\knives.jpg" alt="Knives" class="item kit">
        <h2>Cutlery Knives(Set)</h2>
        <h3>P300</h3>
        <input type="hidden" name="product_name[]" value="Cutlery Knives(Set)">
        <input type="hidden" name="price[]" value="300">
        <input type="hidden" name="image[]" value="images\knives.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>

<form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\shelf4.jpg" alt="boards" class="item kit2">
        <h2>Inspiration Boards</h2>
        <h3>P150</h3>
        <input type="hidden" name="product_name[]" value="Inspiration Boards">
        <input type="hidden" name="price[]" value="150">
        <input type="hidden" name="image[]" value="images\shelf4.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>

<form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\shelf.jpg" alt="shelf" class="item kit">
        <h2>Assorted Accessories(2)</h2>
        <h3>P400</h3>
        <input type="hidden" name="product_name[]" value="Assorted Accessories(2)">
        <input type="hidden" name="price[]" value="400">
        <input type="hidden" name="image[]" value="images\shelf.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>

<form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\shelf5.jpg" alt="boards" class="item kit2">
        <h2>Wooden Chopping Boards</h2>
        <h3>P250</h3>
        <input type="hidden" name="product_name[]" value="Wooden Chopping Boards">
        <input type="hidden" name="price[]" value="250">
        <input type="hidden" name="image[]" value="images\shelf5.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>

<form action="insert_product3.php" method="post">
    <section class="kitchen-items">
        <img src="images\coffemaker.jpg" alt="coffeemaker" class="item kit">
        <h2>Hanabishi Coffeemaker</h2>
        <h3>P3000</h3>
        <input type="hidden" name="product_name[]" value="Hanabishi Coffeemaker">
        <input type="hidden" name="price[]" value="3000">
        <input type="hidden" name="image[]" value="images\coffemaker.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
</form>


   



    </main>



 
    <footer class="footer">
        <div class="footer-con">
        <ul>
            <li class="choice float"><a href="dashboared.php">HOME</a></li>
            <li class="choice float"><a href="aboutus.php">About Us</a></li>
            <li class="choice float"><a href="FAQS.php">FAQS</a></li>
            <li class="choice float"><a href="termsofservive.php">Terms of Service</a></li>
            <li class="choice float"><a href="returnpolicy.php">Return Policy</a></li>
            <li class="choice float"><a href="customerservice.php">Customer Service</a></li>
            <li class="choice float"><a href="giveusfeedback.php">Give Us Feedback</a></li>
        </ul>
        <div>
            <p>&copy; 2023 Arte Philippines. All rights reserved.</p>
        </div>
        </div>
    </footer>
   
</body>
</html>