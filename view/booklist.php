<html>
    <head></head>
    <body>
        <table>
            <tr>
                <td>Title</td>
                <td>Author</td>
                <td>Description</td>
                <td>Price</td>
            </tr>
            <?php 
                foreach($books as $title => $book){
                    echo "<tr>";
                    echo '<td><a href="index.php?book=' . $book->getTitle() . '">' . $book->getTitle() . '</a></td>';
                    echo '<td>' . $book->getAuthor() . '</td>';
                    echo '<td>' . $book->getDescription() . '</td>';
                    echo '<td>' . $book->getPrice() . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>