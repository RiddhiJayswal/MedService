<?php 
@include 'config.php'; 
session_start(); 
if (isset($_POST['submit'])) { 
// Check if the key "name" exists in $_POST 
$name = isset($_POST['name']) ? mysqli_real_escape_string($conn, 
$_POST['name']) : ''; 
// Check if the key "email" exists in $_POST 
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, 
$_POST['email']) : ''; 
// Check if the key "password" exists in $_POST 
$pass = isset($_POST['password']) ? md5($_POST['password']) : ''; 
     
    // Check if the key "cpassword" exists in $_POST 
    $cpass = isset($_POST['cpassword']) ? md5($_POST['cpassword']) : ''; 
     
    // Check if the key "user_type" exists in $_POST 
    $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : ''; 
 
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = 
'$pass'"; 
    $result = mysqli_query($conn, $select); 
 
    if (mysqli_num_rows($result) > 0) { 
        $row = mysqli_fetch_array($result); 
 
        if ($row["user_type"] =='admin') { 
            $_SESSION['admin_name'] = $row['name']; 
            header('location:adminpage.php'); 
        } else if ($row['user_type'] == 'user') { 
            $_SESSION['user_name'] = $row['name']; 
            header('location:userpage.php'); 
        } else { 
            $error[] = 'Incorrect email or password!'; 
        } 
    }  
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>login form</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
     
    <div class="form-container"> 
        <form action="" method="post"> 
            <h3>login now</h3> 
            <?php  
            if(isset($error)){ 
                foreach($error as $error){ 
                echo '<span class="error msg">'.$error.'</span>'; 
                }; 
            }; 
            ?> 
            <input type="email" name="email" required placeholder="enter your 
email"> 
            <input type="password" name="password" required placeholder="enter 
your password"> 
            <input type="submit" name="submit" value="login  now" class="form
btn"> 
            <p>don't have an account? <a href="register.php">register 
now</a></p> 
 
        </form> 
    </div> 
</body> 
</html>