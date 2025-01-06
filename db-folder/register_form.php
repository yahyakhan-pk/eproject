<?php

include 'config.php'; 

if(isset($_POST['submit'])) {
   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

   // Check if email already exists
   $select = "SELECT * FROM user_form WHERE email = '$email'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0) {
      $error[] = 'User already exists!';
   } else {
      if($password !== $cpassword){
          $error[] = 'Passwords do not match!';
      } else {
          // Hash the password securely
          $hashed_password = password_hash($password, PASSWORD_BCRYPT);

          // Prepare the INSERT statement
          $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name', '$email', '$hashed_password', '$user_type')";

          // Execute the INSERT query
          if(mysqli_query($conn, $insert)){
              header('location:login_form.php');
              exit(); 
          } else {
              $error[] = 'Registration failed. Please try again.';
          }
      }
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="form-container">

<form action="#" method="post">
    <h3>Register Now</h3>
    <?php
    if(isset($error)) {
        foreach($error as $err) {
            echo '<span class="error-msg">'.$err.'</span>';
        }
    }
    ?>
    <input type="text" name="name" required placeholder="Enter your name">
    <input type="email" name="email" required placeholder="Enter your email">
    <input type="password" name="password" required placeholder="Enter your password">
    <input type="password" name="cpassword" required placeholder="Confirm your password">
    <select name="user_type">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
    <input type="submit" name="submit" value="Register Now" class="form_btn">
    <p>Already have an account? <a href="login_form.php">Login Now</a></p>
</form>
</div>
    
</body>
</html>
