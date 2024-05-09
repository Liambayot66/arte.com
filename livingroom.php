
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte: Living Room Accessories</title>
    <link rel="stylesheet" href="css\livingroom.css">
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
    <section class="furniture">
        <h1>LIVING ROOM</h1>
    </section>

    <main class="product">

    <form action="insert_product.php" method="post">
    <section class="lr-items">
        <img src="images\painting7.jpg" alt="Painting" class="item p7">
        <h2>Equestrian Stampede</h2>
        <h3>P5000</h3>
        <input type="hidden" name="product_name[]" value="Equestrian Stampede">
        <input type="hidden" name="price[]" value="5000">
        <input type="hidden" name="image[]" value="images\painting7.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
    </section>
    </form>


    <form action="insert_product.php" method="post">
    <section class="lr-items">
        <img src="images\painting8.jpg" alt="Painting" class="item p8">
        <h2>Eloquent Paris</h2>
        <h3>P2000</h3>
        <input type="hidden" name="product_name[]" value="Eloquent Paris">
        <input type="hidden" name="price[]" value="2000">
        <input type="hidden" name="image[]" value="images\painting8.jpg">
        <div class="buttons">
            <button class="cart-button" type="submit">Add to cart</button>
        </div>
        </section>
    </form>
  
<form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\painting9.jpg" alt="Painting" class="item p9">
            <h2>Renaissance Open Outdoors</h2>
            <h3>P2000</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="Renaissance Open Outdoors">
            <input type="hidden" name="price[]" value="2000">
            <input type="hidden" name="image[]" value="images\painting9.jpg">
        </section>
        </form>

        <form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\figure6.jpg" alt="Figure" class="item f6">
            <h2>Umbrella Couple</h2>
            <h3>P800</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="Umbrella Couple">
            <input type="hidden" name="price[]" value="800">
            <input type="hidden" name="image[]" value="images\figure6.jpg">
        </section>
        </form>


<form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\figure7.jpg" alt="Figure" class="item f7">
            <h2>Great Dane & Trojan Horse</h2>
            <h3>P2000</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="Great Dane & Trojan Horse">
            <input type="hidden" name="price[]" value="2000">
            <input type="hidden" name="image[]" value="images\figure7.jpg">
        </section>
        </form>

        <form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\figure8.jpg" alt="Figure" class="item f8">
            <h2>1950s Car Model</h2>
            <h3>P4500</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="1950s Car Model">
            <input type="hidden" name="price[]" value="4500">
            <input type="hidden" name="image[]" value="images\figure8.jpg">
        </section>
        </form>

<form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\figure12.jpg" alt="Figure" class="item f12">
            <h2>Assorted Figurines(set)</h2>
            <h3>P6000</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="Assorted Figurines(set)">
            <input type="hidden" name="price[]" value="6000">
            <input type="hidden" name="image[]" value="images\figure12.jpg">
        </section>
        </form>


<form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\figure13.jpg" alt="Figure" class="item f13">
            <h2>Fan Clock</h2>
            <h3>P3000</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="Fan Clock">
            <input type="hidden" name="price[]" value="3000">
            <input type="hidden" name="image[]" value="images\figure13.jpg">
        </section>
        </form>


<form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\figure14.jpg" alt="Figue" class="item f14">
            <h2>Bulldog & Pug</h2>
            <h3>P3000</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="Bulldog & Pug">
            <input type="hidden" name="price[]" value="3000">
            <input type="hidden" name="image[]" value="images\figure14.jpg">
        </section>
        </form>


<form action="insert_product.php" method="post">
        <section class="lr-items">
            <img src="images\guns2.jpg" alt="Decorative Gun" class="item g2">
            <h2>John Wick</h2>
            <h3>P3000</h3>
            <div class="buttons">
                <button class="cart-button" type="submit">Add to cart</button>
            </div>
            <input type="hidden" name="product_name[]" value="John Wick">
            <input type="hidden" name="price[]" value="3000">
            <input type="hidden" name="image[]" value="images\guns2.jpg">
        </section>
        </form>
        <hr>
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