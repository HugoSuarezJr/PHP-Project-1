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

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book3 = new Book("The Holy Scriptures", "Jehovah", 1661);

        echo "<h1> $book3->author is the creator of all things and the Author of $book3->title 
        which has a total of $book3->pages pages. </h1>"

     ?> 
    
    
</body>
</html> 