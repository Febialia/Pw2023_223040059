<?php
require('connect.php');

if (isset($_POST['submit'])) {
    $conn = koneksi();

    $name =     $_POST['name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    $sql = "SELECT * FROM `admin` WHERE `name` = '{$name}'";
    $user = query($sql);

    if (!count($user) > 0) {

        if ($password === $confirm_password) {

            $query = "INSERT INTO admin(name, password, level) VALUES ('$name', '$password', 'User')";

            mysqli_query($conn, $query) or die(mysqli_error($conn));

            header('Location: login.php');
        } else {
            header('Location: register.php');
        }
    } else {
        header('Location: register.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="stylesheet" href="css/style.css">
    <style>
        .register-form {
            background-image: url(./imag/bg_loginregis.jpg);
        }
    </style>

</head>

<body>

    <div class="register-form">
        <div class="register">
            <h2>Sign Up</h2>

            <form action="" method="post">
                <div class="inputbox">
                    <input type="text" placeholder="Username" name="name" required>
                </div>
                <div class="inputbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="inputbox">
                    <input type="text" placeholder="Confirm Password" name="confirm_password" required>
                </div>
                <div class="inputbox">
                    <input name="submit" type="submit" value="Register Now" id="btn" required>
                </div>
            </form>

            <div class="bottom-content">
                <p>Already have an account?
                    <a href="login.php">Sign In</a>
                </p>
            </div>

        </div>
    </div>

</body>

</html>