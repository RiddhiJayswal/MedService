<?php 
@include 'config.php'; 

if (isset($_POST['submit'])) { 
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, trim($_POST['email'])) : '';
    $password = $_POST['password'] ?? '';
    $cpassword = $_POST['cpassword'] ?? '';
    $user_type = 'user';

    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        $error[] = 'All fields are required!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Please enter a valid email address!';
    } elseif (strlen($password) < 8) {
        $error[] = 'Password must be at least 8 characters long!';
    } elseif ($password !== $cpassword) {
        $error[] = 'Password not matched!';
    } else {
        $select = "SELECT * FROM user_form WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $error[] = 'User already exists!';
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name', '$email', '$hashedPassword', '$user_type')";
            mysqli_query($conn, $insert);
            header('location: login.php');
            exit();
        }
    }
}
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>register form</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
     
    <div class="form-container"> 
        <form action="" method="post"> 
            <h3>register now</h3> 
            <?php  
            if(isset($error)){ 
                foreach($error as $error){ 
                echo '<span class="error msg">'.$error.'</span>'; 
                }; 
            }; 

            ?> 
            <input type="text" name="name" required placeholder="enter your name"> 
            <input type="email" name="email" required placeholder="enter your email"> 
            <input type="password" name="password" required placeholder="enter your password"> 
            <input type="password" name="cpassword" required placeholder="Confirm your password"> 
            <input type="submit" name="submit" value="register now" class="form-btn"> 
            <p>already have an account? <a href="login.php">login now</a></p> 
 
        </form> 
    </div> 
</body> 
</html>