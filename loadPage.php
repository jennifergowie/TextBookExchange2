<html>
    <head>
        <meta charset="UTF-8">
            <title>View All Books</title>
            <link rel="stylesheet" type="text/css" href="assets/style.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
    </head>
    <body>
    <?php
        include 'dbConnect.php';
            $sql = "SELECT * FROM books";
            $results =$link->query($sql);
            echo "<table>";
            while ($row = $results->fetch_array()){
                echo"<tr><td>".$row['Isbn-10']."</td><td>".$row['Isbn-13']."</td><td>".$row['Author']."</td><td>"
                .$row['Title']."</td><td>".$row['Language']."</td><td>".$row['PublicationDate']."</td><td>"
                .$row['Publisher']."</td><td>".$row['Price']."</td></tr>";
                }
            echo"</table>";
        ?>

    </body>
    <footer>
        <div class="container">
            <br></br>
            <center><p>&copy; 2017 textbookexchange.com</p></center>
        </div>
    </footer>
</html>

