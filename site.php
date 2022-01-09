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
        $isMale = false;
        $isTall = true;
        if ($isMale && $isTall){
            echo "You are a tall male"; 
        } elseif ($isTall && !$isMale) {
            echo "You are a tall woman!";
        } elseif ($isMale) {
            echo "You are a short male";
        } else {
            echo "You are a short woman";
        }
    ?>
    
    
</body>
</html> 