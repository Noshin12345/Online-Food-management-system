<?php include('../config/constraints.php');?>

<?php


if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM tbl_admin WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row && password_verify($password, $row['password'])) {
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            header('location: ' . SITEURL . 'admin/');
            
        } else {
            $_SESSION['login'] = "<div class='error'>Invalid username or password.</div>";
            header('location: manage_admin.php'); // Redirect to the login page if login fails
            
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stiled.css">
</head>
<body>
<div class="login">
            <h1 class="text-center">Admin Login</h1>
            <br><br>
    <?php
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
    ?>
    
    <form action="" method="POST" class="text-center">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

