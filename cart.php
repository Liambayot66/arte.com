<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="icon" type="image/png" href="..\images\Arte Logo.jpeg"/>
    <title>Shopping Cart</title>
    <style>
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
        .product {
            display: inline-block;
            width: 200px;
            margin: 20px;
            background-color: #f2e8dd; /* Light brown background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 15px;
            text-align: center;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .product h3 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            color: #5c433c; /* Dark brown text */
            margin-top: 0;
        }

        .product p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            color: #7c685d; /* Light brown text */
            margin-bottom: 10px;
        }

        .delete-button {
            background-color: #cc4b37; /* Red delete button */
            color: #fff; /* White text */
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #a13323; /* Darker red on hover */
        }

        .checkout-button {
            background-color: #b88b6a; /* Brown button background */
            color: #fff; /* White text */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            transition: background-color 0.3s ease;
            text-transform: uppercase; /* Uppercase text */
        }

        .checkout-button:hover {
            background-color: #8e6d56; /* Darker brown on hover */
        }

        .checkout-button:active {
            transform: translateY(1px); /* Add a slight downward shift when clicked */
            box-shadow: none; /* Remove box shadow when clicked */
        }

        .cart {
            text-align: center; /* Center-align the contents */
        }
        .checkout-btn {
    /* Assuming you want some padding around the button */
    padding: 10px;
}

.checkout-btn a.btn {
    /* Blue background color */
    background-color: #4a90e2;
    /* White text color */
    color: #ffffff;
    /* Add some padding to the button */
    padding: 10px 20px;
    /* Border radius for rounded corners */
    border-radius: 5px;
    /* Display as block to take full width of its container */
    display: inline-block;
    /* Text alignment */
    text-align: center;
    /* Remove underlines */
    text-decoration: none;
}

.checkout-btn a.btn.disabled {
    /* If the button is disabled, adjust opacity */
    opacity: 0.5;
    /* You can also adjust cursor to indicate it's not clickable */
    cursor: not-allowed;
}
.orders-link {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: #7B4F38; /* Coffee brown background color */
    color: #fff; /* Text color */
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid #54392D; /* Darker border */
    transition: background-color 0.3s;
    z-index: 1000;
}

.orders-link:hover {
    background-color: #54392D; /* Darker brown on hover */
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
    

    <div class="space space-rel"></div>

    <!-- Shopping Cart Section -->
    <div class="cart">
        <h2>Shopping Cart</h2>

        <a href="orders.php" class="orders-link">Orders</a>

        <div class="lr-items">
            <?php
            require 'connection.php';

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch products from the database
            $sql = "SELECT id, product_name, price, image FROM products";
            $result = $conn->query($sql);

            // Display products
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row["image"] . "' alt='" . $row["product_name"] . "'>";
                    echo "<h3>" . $row["product_name"] . "</h3>";
                    echo "<p>Price: P" . $row["price"] . "</p>";
                    // Add a delete button with a unique identifier for each product
                    echo "<button class='delete-button' data-product-id='" . $row["id"] . "'>Delete</button>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
        


        <div class="checkout-btn">

<a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
</div>


 
</script>

    </div>

    <br><br><br><br><br>
    <div class="space space-rel"></div>
    <script>

        function purchaseAll() {
    // Send a request to the server to handle the purchase of all products
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'process_purchase.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Purchase successful, redirect to the checkout form
                window.location.href = "checkout.php";
            } else {
                // An error occurred, log the error
                console.error(xhr.responseText);
                alert('An error occurred while processing the purchase.');
            }
        }
    };
    xhr.send();
}

        // When the document is ready
        document.addEventListener("DOMContentLoaded", function() {
            // Attach click event to delete buttons
            var deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Get the product id from the data attribute
                    var productId = button.getAttribute('data-product-id');

                    // Perform AJAX request to delete the product
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'delete_product.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                // Product deleted successfully, reload the page
                                location.reload();
                            } else {
                                // An error occurred, log the error
                                console.error(xhr.responseText);
                                alert('An error occurred while deleting the product.');
                            }
                        }
                    };
                    xhr.send('productId=' + productId);
                });
            });
        });
    </script>
</body>
</html>
