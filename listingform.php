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
                <input type="text" name="isbn13" placeholder="13 Digit ISBN" required><br>
                <input type="text" name="isbn10" placeholder="10 Digit ISBN" required><br>
                <input type="text" name="title" placeholder="Title"><br>
                <input type="text" name="author" placeholder="Author"><br>
                <input type="text" name="language" placeholder="Language"><br>
                <input type="text" name="publisher" placeholder="Publisher"><br>
                <input type="text" name="publicationDate" placeholder="Publication Date: YYYY-MM-DD"><br>
                <input type="text" name="price" placeholder="Requested Price"><br>
                <label for="Mint">Mint</label>
                <input type="radio" name="bookCondition" id="Mint" value="Mint" checked>
                <label for="Excellent">Excellent</label>
                <input type="radio" name="bookCondition" id="Excellent" value="Excellent">
                <label for="Good">Good</label>
                <input type="radio" name="bookCondition" id="Good" value="Good">
                <label for="Fair">Fair</label>
                <input type="radio" name="bookCondition" id="Fair" value="Fair">
                <label for="Rough">Rough</label>
                <input type="radio" name="bookCondition" id="Rough" value="Rough">
                <label for="Damaged">Damaged</label>
                <input type="radio" name="bookCondition" id="Damaged" value="Damaged">
                <button type="submit">List Textbook</button>
            </div>
        </form>
    </section>
</main>
</body>
</html>