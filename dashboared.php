
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte: Home Furnishing Specialist</title>
    <link rel="stylesheet" href="css/style.css">
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

    <section class="space search-bar">
       

    </section>
    </div>
    <header class="header">

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


        <img src="images\received_1297213491195542.jpeg" alt="Logo" class="logo">
        

        <nav class="nav"> 
            <p class="choice home"><a href="dashboared.php">HOME</a></p>
            <p class="choice lr-bar"><a href="livingroom.php">LIVING ROOM</a></p>
            <p class="choice kitchen-bar"><a href="kitchen.php">KITCHEN</a></p>
            <p class="choice br-bar"><a href="bedroom.php">BEDROOM</a></p>
            <p class="choice br-bar"><a href="cart.php">CART</a></p>
               
        </nav>
    </header>

    <section class="first-pic">
        <img src="images\BGimage.jpg" alt="Living Room" class="pic">
    </section>
    
    <section class="space mid">
        <h1 class="motto-top">Furniture that Fits and Hits Home |</h1>
        <h1 class="motto-bot" style="white-space:pre"> Only at Arte Philippines</h1>
    </section>

    <section class="mid-content">
        <img src="images\Home image3.jpg" alt="1" class="portrait first">
        <img src="images\Home image2.jpg" alt="2" class="portrait mid">
        <img src="images\Home image1.jpg" alt="3" class="portrait last">
    </section>

    <div class="space">
        <h2>Sneak peak inside!</h2>
    </div>

    <div class="video-con">
        <video src="video\bidyo.mp4" controls class="vid"></video>
    </div>

    <div class="space space-rel"></div>
    
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
        <div class="join-email">
            <h2>Sign Up For <span class="red">Sale</span> + New Arrivals</h2>
            <h4>Join our mailing list for updates</h4>
            <form>
              <input type="email" id="email" placeholder="Email Address" required class="email-input">
              <button type="button" onclick="displayMessage()" class="btn">Join</button>
            </form>
        </div>
        <div>
            <p>&copy; 2024 Arte Philippines. All rights reserved.</p>
        </div>
        </div>
    </footer>
    
    <script>
        function displayMessage() {
          var emailInput = document.getElementById('email');
          emailInput.value = 'Thank you for joining!';
          emailInput.classList.add('message');
        }
      </script>
</body>
</html>