<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a listing</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>
<header>
    <h1>Textbook Exchange Listings</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Browse</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Create Listing</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
</header>

<?php

//If no form input given, create the HTML form. Otherwise run the SQL query.
if ($_SERVER['REQUEST_METHOD']==="GET"){
    include('listingform.php');
} elseif ($_SERVER['REQUEST_METHOD']==="POST"){
    //Create variables from form
    $isbn13 = $_POST['isbn13'];
    $isbn10 = $_POST['isbn10'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $language = $_POST['language'];
    $publisher = $_POST['publisher'];
    $publicationDate = $_POST['publicationDate'];
    $price = $_POST['price'];
    $bookCondition = $_POST['bookCondition'];

    //Establish DB connection
    include("dbConnect.php");

    //Create SQL query as a string
    /*!!!!IMPORTANT NOTE!!!! Column titles should be enclosed in ``(grave accent located to the left of 1 key) while the values should be enclosed in ''(apostrophe) */
    $sql = "INSERT INTO books (`ISBN-13`, `ISBN-10`, `Title`, `Language`, `Publisher`, `PublicationDate`, `Author`, `Price`, `BookCondition`) VALUES ('$isbn13', '$isbn10', '$title', '$language', '$publisher', '$publicationDate', '$author', '$price', '$bookCondition')";

    //Execute query
    if ($link->query($sql)===TRUE) {
        echo "New textbook listed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
    //Close connection
    $link->close();
}
?>

<footer>
    <div class="container">
        <p>&copy; 2017 textbookexchange.com</p>
    </div>
</footer>
</body>
</html>