<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listings Form</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>
<main class="grid-container">
    <section class="grid-66">
        <h3>Input your textbook information below to create a listing</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div>
                <input type="text" name="title" placeholder="Title" required><br>
                <input type="text" name="author" placeholder="Author" required><br>
                <input type="text" name="isbn" placeholder="ISBN" required><br>
                <input type="text" name="price" placeholder="Requested Price" required><br>
                <button type="submit">List Textbook</button>
            </div>
        </form>
    </section>
</main>
</body>
</html>