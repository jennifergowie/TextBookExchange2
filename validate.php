<?php
if (isset($_POST["username"]) and isset($_POST["password"]) {   //Checks if username and password have been passed from index.php
    $username = $_POST["username"];                             //Sets $username variable to the username passed from index.php
    $password = $_POST["password"];                             //Sets $password variable to the password passed from index.php
} else {
    header("location: index.php");                              //Else it kicks the user back to index.php
}


?>