<?php
require 'connection.php'; // Assuming this file contains the database connection code

// Check if delete button is clicked
if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];
    // Delete order from the database
    $delete_query = "DELETE FROM orderss WHERE id = '$delete_id'";
    mysqli_query($conn, $delete_query);
}

// Check if update button is clicked

// Fetch data from the "orders" table
$query = "SELECT * FROM orderss";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2eae1; /* Light beige background */
            color: #3a3a3a; /* Dark gray text color */
            padding: 20px;
        }
        .order-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .order-card {
            background-color: #ffffff; /* White background */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Shadow effect */
            padding: 20px;
        }
        .order-card h3 {
            color: #7b4f38; /* Coffee brown header color */
            margin-bottom: 10px;
        }
        .order-info {
            margin-bottom: 10px;
        }
        .action-links a {
    color: #8B4513; /* Brown color for links */
    text-decoration: none; /* Remove underline */
    transition: color 0.3s; /* Smooth transition for color change */
    margin-right: 10px;
    position: relative;
}

.action-links a::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: -3px;
    left: 0;
    background-color: #8B4513; /* Brown color for underline */
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out;
}

.action-links a {
    color: #ffffff; /* White text color */
    background-color: #8B4513; /* Brown color for background */
    padding: 5px 10px; /* Add padding */
    border-radius: 5px; /* Add rounded corners */
    text-decoration: none; /* Remove underline */
    transition: background-color 0.3s; /* Smooth transition for background color change */
    margin-right: 10px;
    position: relative;
}

.action-links a:hover {
    background-color: #A0522D; /* Darker brown color on hover */
}
.header{
    display: grid;
    place-items: center;
    width: 100%;
    height: auto;
    background-color:var(--header-background);
    position: -webkit-sticky;
    position: sticky;
    top:0;
    z-index: 10;
    opacity: 0.8;
    font-family: var(--nav-family);
}
.nav{
    display: flex;
    flex-wrap: wrap;
}
.logo{
    width: 15rem;
    height: auto;   
}
a{
    text-decoration: none;
    color: var(--nav-family);
}
.choice{
    text-decoration: none;
    border: 3px solid transparent;
    padding: 3px;
    font-weight: var(--main-weight);
    font-style: var(--main-style);
    font-size: var(--font-size2);
	list-style-type: none;
}
.pic{
    width: 100%;
    height: auto;
}
.choice:hover{
    border-bottom: 3px solid #393939;
}

/*Section*/

.mid-content{
    display: flex;
    justify-content: space-around;
}


    </style>
</head>
<body>
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
    

<h2>Orders</h2>


<div class="order-container">
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='order-card'>";
            echo "<h3>Order Details</h3>";
            echo "<div class='order-info'>Name: " . $row['name'] . "</div>";
            echo "<div class='order-info'>Number: " . $row['number'] . "</div>";
            echo "<div class='order-info'>Email: " . $row['email'] . "</div>";
            echo "<div class='order-info'>Method: " . $row['method'] . "</div>";
            echo "<div class='order-info'>Flat: " . $row['flat'] . "</div>";
            echo "<div class='order-info'>Street: " . $row['street'] . "</div>";
            echo "<div class='order-info'>City: " . $row['city'] . "</div>";
            echo "<div class='order-info'>State: " . $row['state'] . "</div>";
            echo "<div class='order-info'>Country: " . $row['country'] . "</div>";
            echo "<div class='order-info'>Pin Code: " . $row['pin_code'] . "</div>";
            echo "<div class='order-info'>Products: " . $row['products_name'] . "</div>";
            echo "<div class='order-info'>Total Price: " . $row['total_price'] . "</div>";
            echo "<div class='action-links'>";
            echo "<a href='?delete_id=" . $row['id'] . "'>Delete</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No orders found</p>";
    }
    ?>
</div>

</body>
</html>