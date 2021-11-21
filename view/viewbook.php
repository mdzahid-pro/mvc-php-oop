<html>
    <head></head>
    <body>
        <?php 
            echo "Title: "       . $book->getTitle() . "<br/>";
            echo "Author: "       . $book->getAuthor() . "<br/>";
            echo "Description: "       . $book->getDescription() . "<br/>";
            echo "Price: "       . $book->getPrice() . "<br/>";
        ?>
    </body>
</html>