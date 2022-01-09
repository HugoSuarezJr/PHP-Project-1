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
    First Number: <input type="number" step="0.0001" name="num1" > <br>
    OP: <input type="text" name="op"><br>
    Second Number: <input type="number" step="0.0001" name="num2" > <br>
    <input type="submit">
</form>
-->

     <?php
        // $num1 = $_POST["num1"];
        // $num2 = $_POST["num2"];
        // $op = $_POST["op"];

        // if($op == "+"){
        //     echo $num1 + $num2;
        // } elseif($op == "*"){
        //     echo $num1 * $num2;
        // } elseif($op == "/"){
        //     echo $num1 / $num2;
        // } elseif($op == "-"){
        //     echo $num1 - $num2;
        // } else {
        //   echo  "Invalid Operator";
        // }

        

        $territories = array(
            "1 - Miami", "10 - Key West", "20c - West Palm Beach", "20b - West Palm Beach", "2 - Fort Lauderdale", "5 - Orlando"
        );
        sort($territories, SORT_NATURAL | SORT_FLAG_CASE);
        foreach ($territories as $key => $val) {
            echo " $val \n <br>";
        }


        
    ?> 
    
    
</body>
</html> 