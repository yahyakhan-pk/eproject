<?php

include 'config.php'; 

session_start();

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
     
    $row = mysqli_fetch_array($result);
    if($row['user_type'] == 'admin'){

        $_SESSION['admin_name'] = $row['name'];
        header('location:admin_page.php');

    }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        header('location:user_page.php');
    }

   }else{
    $error[] = 'incorrect email or password!';
   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="form-container">

<form action="#" method="post">
    <h3>login now</h3>
    <?php
    if(isset($error)) {
        foreach($error as $err) {
            echo '<span class="error-msg">'.$err.'</span>';
        }
    }
    ?>
    <input type="email" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter your password">
   
    <input type="submit" name="submit" value="login now" class="form_btn">
    <p>don't have an account? <a href="register_form.php">register now</a></p>
</form>
</div>
    
</body>
</html>