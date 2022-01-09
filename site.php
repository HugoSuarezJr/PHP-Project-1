<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP course</title>
</head>
<body>

<!-- <form action="site.php" method="post" >
    <input type="text" name="student" >
    <input type="submit">
</form> -->

    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age<br>";
        }

        sayHi("Hugo", 70);
        sayHi("Mike", 88);
        sayHi("Johnny", 12);
    ?>
    
    
</body>
</html> 