<?php

// NB: add comments throughout!

session_start();
session_unset();
session_destroy();
//header("location: login.php"); // display message below when logout button is clicked instead
?>

<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
        <center><img src="assets/logo.png" alt="Logo" style="width:100px;height:100px;"></center>
    </head>
    <body>

        <div class="container">
            <center><h2>Thanks for visiting Textbook Exchange</h2></center>
            <center><span>Click here to <a href="login.php">login</a> again</span>
        </div>
    </body>

    <footer>
        <div class="container">
            <br></br>
            <center><p>&copy; 2017 textbookexchange.com</p></center>
        </div>
    </footer>

</html>