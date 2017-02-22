
<?php

// NB: add comments throughout!

session_start();
if(!isset($_SESSION["username"])) {
    header("location: login.php");
}
$username=$_SESSION["user"];
?>

<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>
        <div class="container">
            <form method="get" action="logout.php">
                <h3>Congratulations!</h3>
                <h4>You have successfully logged in to the Textbook Exchange Website!</h4>
                <p>We hope you like our site and that you do some business with us.</p>
                <button type="submit">Logout</button>
            </form>
        </div>
    </body>

    <footer>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>
