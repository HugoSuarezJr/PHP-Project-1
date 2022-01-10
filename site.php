<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP course</title>
</head>
<body>




     <?php 
        
        class Book {
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;

        $book1-> title = "Harry Potter";
        $book1-> author = "JK Rowling";
        $book1-> pages = 400;

        echo $book1-> pages;

        $book2 = new Book;

        $book2-> title = "Lord of The Rings";
        $book2-> author = "Tolkien";
        $book2-> pages = 700;

        echo "<br>";
        echo $book2-> pages;

     ?> 
    
    
</body>
</html> 