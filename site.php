<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP course</title>
</head>
<body>

<form action="site.php" method="post" >
    What was your grade? <br> <input type="text" name="grade" > <br>
    <input type="submit">
</form>


     <?php
       
        $grade = $_POST["grade"];

        switch($grade){
            case "A" : 
                echo "You did amazing";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            case "C": 
                echo "You did ok";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAIL!";
                break;
            default:
                echo "Invalid Grade";
        }


        

        // $territories = array(
        //     "1 - Miami", "10 - Key West", "20c - West Palm Beach", "20b - West Palm Beach", "2 - Fort Lauderdale", "5 - Orlando"
        // );
        // sort($territories, SORT_NATURAL | SORT_FLAG_CASE);
        // foreach ($territories as $key => $val) {
        //     echo " $val \n <br>";
        // }


        
    ?> 
    
    
</body>
</html> 