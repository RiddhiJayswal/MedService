<?php 
@include 'config.php'; 
 
if (isset($_POST['submit'])) { 
    $name = mysqli_real_escape_string($conn, $_POST['name']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $pass = md5($_POST['password']); 
    $cpass = md5($_POST['cpassword']); 
    $user_type = $_POST['user_type']; 
 
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = 
'$pass'"; 
    $result = mysqli_query($conn, $select); 
 
    if (mysqli_num_rows($result) > 0) { 
        $error[] = 'User already exists!'; 
    } else { 
        if ($pass != $cpass) { 
            $error[] = 'Password not matched!'; 
        } else { 
            $insert = "INSERT INTO user_form (name, email, password, 
user_type) VALUES ('$name', '$email', '$pass', '$user_type')"; 
            mysqli_query($conn, $insert); 
            header('location: login.php'); 
        } 
    } 
}; 
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
            <input type="text" name="name" required placeholder="enter your 
name"> 
            <input type="email" name="email" required placeholder="enter your 
email"> 
            <input type="password" name="password" required placeholder="enter 
your password"> 
            <input type="password" name="cpassword" required 
placeholder="Confirm your password"> 
            <select name="user_type" id=""> 
                <option value="user">patient</option> 
                <option value="admin">doctor</option> 
            </select> 
            <input type="submit" name="submit" value="register  now" 
class="form-btn"> 
            <p>already have an account? <a href="login.php">login now</a></p> 
 
        </form> 
    </div> 
</body> 
</html>