<?php
session_start();
if(isset($_SESSION["username"])) {
    header("location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List your Textbook!</title>
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
    <section class="grid-container">
        <h1>TextBookExchange Listings Page</h1>
    </section>
</header>

<nav>
    <section class="grid-container navbar">
        <div class="grid-25">
            <div class="navbutton">
                <a href="#"><p>Browse</p></a>
            </div>
        </div>

        <div class="grid-25">
            <div class="navbutton">
                <a href="#"><p>List</p></a>
            </div>
        </div>

        <div class="grid-25">
            <div class="navbutton">
                <a href="#"><p>Search</p></a>
            </div>
        </div>

        <div class="grid-25">
            <div class="navbutton">
                <a href="#"><p>Profile</p></a>
            </div>
        </div>
    </section>
</nav>

<main>
    <section class="grid-container">
        <h3>Use this page to create your book listing!</h3>
        <form action="#" method="post">
            <div>
                <input type="text" name="title" placeholder="Book Title" required><br>
                <input type="text" name="author" placeholder="Author" required><br>
                <input type="text" name="ISBN" placeholder="ISBN Number"><br>
                <input type="text" name="price" placeholder="Requested Price" required><br>
                <button type="submit">Create Listing</button>
            </div>
        </form>
    </section>
</main>
</body>
</html>