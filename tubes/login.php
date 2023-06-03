<?php
require('connect.php');

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `name` = '{$name}' AND `password` = '{$password}'";
    $user = query($sql);

    if (count($user) > 0) {
        $_SESSION['name'] = $name;

        if ($user[0]['level'] == 'Admin') {
            header('Location: admin/dashboard.php');
        } else {
            header('Location: index.php');
        }
    } else {
        header('Location: login.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="css/style.css">
    <style>
        .login-form {
            background-image: url(./imag/bg_loginregis.jpg);
        }
    </style>

</head>

<body>


    <div class="login-form">
        <div class="login">
            <h2>Sign In</h2>

            <form action="" method="post">
                <div class="inputbox">
                    <input type="text" placeholder="name" required name="name">
                </div>
                <div class="inputbox">
                    <input type="password" placeholder="Password" required name="password">
                </div>
                <div class="inputbox">
                    <input name="submit" type="submit" value="Login" id="btn" required>
                </div>
            </form>

            <div class="bottom-content">
                <a href="#">Forgot Password</a>
                <a href="register.php">Sign up</a>
            </div>

        </div>
    </div>

</body>

</html>