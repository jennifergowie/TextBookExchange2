<?php

// NB: add comments throughout!
// encode error msg when invalid account details are received

session_start();
if(isset($_SESSION["username"])) {
    header("location: home.php");
    exit();
}
?>

<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

</head>
    <body>

        <form action="validate.php" method="post">
            <div class="container">
                <center><img src="assets/logo.png" alt="Logo" style="width:100px;height:100px;"></center>
                <h2>Welcome to Textbook Exchange</h2>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Login</button>
                <input type="checkbox" checked="checked">Keep me logged in<br/>
            </div>

            <div class="container">
                <!-- <button type="button" class="cancelbutton">Cancel</button><br> -->
                <br></br>
                <span>Click here if you have forgotten your <a href="forgotpasswd.php">password</a></span>
                <br><br>
                <span>Do not have an account? Click <a href="register.php">here</a> to register</span>
            </div>
        </form>

    </body>

    <footer>
        <div class="container">
            <br>
            <center><p>&copy; 2017 textbookexchange.com</p></center>
        </div>
    </footer>

</html>