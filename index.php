<?php
include_once("function/helper.php");
session_start();
// include_once("function/koneksi.php");
if (isset($_SESSION["login"])) {
    header("location: " . BASE_URL . "masuk.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php require_once('css/css.php'); ?>
        <link rel="stylesheet" href="assets/css/style.css">

        <title>Login</title>
        <style type="text/css">
            body {
                background: url(img/bg.jpg) no-repeat fixed;
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
            }
        </style>
    </head>

<body>

    <div class="login-page">
        <div class="form">
            <form class="register-form" method="post" action="function/do_register.php">
                <input type="text" placeholder="username" name="username" />
                <input type="password" placeholder="password" name="password" />
                <input type="password" placeholder="re enter password" name="password2" />
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form" method="post" action="function/do_login.php">
                <input type="text" placeholder="username" name="username" />
                <input type="password" placeholder="password" name="password" />
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>


        </div>
    </div>

    <?php require_once('css/js.php'); ?>
</body>

</html>