<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a listing</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mogra">
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

<main class="grid-container">
    <section class="grid-66">
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

<footer>

</footer>
</body>
</html>