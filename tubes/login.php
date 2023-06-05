<?php
require('php/connect.php');

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `name` = '{$name}' AND `password` = '{$password}'";
    $user = query($sql);

    if (count($user) > 0) {
        $_SESSION['name'] = $name;

        if ($user[0]['level'] == 'Admin') {
            header('Location: admin/products.php');
        } else {
            echo "<script>
            alert('Successfully Login');
            document.location.href = 'index.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Login Failed!');
            document.location.href = 'login.php';
            </script>";
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
            <h2>Login</h2>

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
                <p>Don't have account?
                    <a href="register.php">Register</a>
                </p>
            </div>

        </div>
    </div>

</body>

</html>