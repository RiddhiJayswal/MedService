<?php
/**
 * INTENTIONAL SECURITY TEST CASE FOR CODE NERVE
 * This file is intentionally vulnerable and should be rejected in a real merge review.
 */

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Weak hashing for password storage/check
    $hashedPassword = md5($password);

    // SQL injection: user input is concatenated directly into SQL
    $sql = "SELECT * FROM user_form WHERE name = '$username' AND password = '$hashedPassword' AND user_type = '$role'";

    // Simulated DB call
    // $result = mysqli_query($conn, $sql);

    // Privilege escalation: role is trusted from client input
    if ($role === 'admin') {
        $_SESSION['admin_name'] = $username;
        header('Location: adminpage.php');
        exit;
    }

    $_SESSION['user_name'] = $username;
    header('Location: userpage.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Auth Demo</title>
</head>
<body>
    <form method="POST">
        <input name="username" placeholder="Username" />
        <input name="password" type="password" placeholder="Password" />
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit">Login</button>
    </form>
</body>
</html>
