<?php
require 'connection.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'User already exists'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'Image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully!';
            header('location:index.php');
         }else{
            $message[] = 'Registration failed!';
         }
      }
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <!-- custom css file link  -->
   
   <style>
    /* style44.css */

body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: blanchedalmond; /* Set background color to khaki */
}

.form-container {
  width: 500px; /* Adjust the width of the form */
  margin: 100px auto; /* Center the form horizontally */
  padding: 40px; /* Add padding around the form */
  background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
  border-radius: 8px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Soft shadow effect */
  text-align: center;
  color: black;
}

h3 {
   color: black;
}

.box {
  width: calc(100% - 40px); /* Adjust the width of input fields */
  padding: 15px; /* Add padding inside input fields */
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn {
  width: calc(100% - 40px); /* Adjust the width of buttons */
  padding: 15px; /* Add padding inside buttons */
  margin: 10px 0;
  border: none;
  border-radius: 4px;
  background-color: blanchedalmond; 
  color: #fff;
  cursor: pointer;
  color: black;
}

.btn:hover {
  background-color: #543d2b;
}

.message {
  color: red;
}
/* style44.css */

/* Styling the file input */
.file-input {
  width: calc(100% - 40px); /* Adjust width */
  padding: 10px; /* Adjust padding */
  margin: 10px 0; /* Adjust margin */
  border: 1px solid #ccc; /* Border style */
  border-radius: 4px; /* Border radius */
  background-color: #fff; /* Background color */
  color: #6c4f3d; /* Text color */
  cursor: pointer; /* Show pointer on hover */
}

/* Styling the file input button */
.file-input-button {
  background-color: #6c4f3d; /* Button background color */
  color: #fff; /* Button text color */
  padding: 10px 20px; /* Button padding */
  border: none; /* Remove button border */
  border-radius: 4px; /* Button border radius */
  cursor: pointer; /* Show pointer on hover */
}

/* Styling the file input button on hover */
.file-input-button:hover {
  background-color: #543d2b; /* Button background color on hover */
}


   </style>
</head>
<body>
   
<div class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
      <h2>Register Now</h2>
      <?php
      if(isset($message)){
         foreach($message as $msg){
            echo '<div class="message">'.$msg.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Enter username" class="box" required>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm password" class="box" required>
    
      <input type="submit" name="submit" value="Register Now" class="btn">
      <p>Already have an account? <a href="index.php">Login Now</a></p>
   </form>
</div>

</body>
</html>
