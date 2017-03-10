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
                <input type="number" name="isbn13" placeholder="13 Digit ISBN" maxlength="13" required><br>
                <input type="number" name="isbn10" placeholder="10 Digit ISBN" maxlength="10" required><br>
                <input type="text" name="title" placeholder="Title"><br>
                <input type="text" name="author" placeholder="Author"><br>
                <input type="text" name="language" placeholder="Language"><br>
                <input type="text" name="publisher" placeholder="Publisher"><br>
                <input type="text" name="publicationDate" placeholder="Publication Date: YYYY-MM-DD"><br>
                <input type="text" name="price" placeholder="Requested Price"><br>
                <button type="submit">List Textbook</button>
            </div>
        </form>
    </section>
</main>
</body>
</html>