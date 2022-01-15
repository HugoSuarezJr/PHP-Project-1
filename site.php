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
        
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecial(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "Italian made pasta<br>";
            }
            function makeSpecial(){
                echo "Italian made lasagna<br>";
            }

        }

        class ColombianChef extends ItalianChef{
            function makeArepa(){
                echo "Colombian chef made arepas!<br>";
            }
        }

        class GreekChef extends ColombianChef{
            function makeGiro(){
                echo "Greek made Giro!";
            }
        }

        $chef = new Chef();

        $chef->makeSpecial();

        $italianChef = new ItalianChef();

        $italianChef->makeSpecial();

        $colombianChef = new ColombianChef();

        $colombianChef->makeArepa();

        $colombianChef->makeChicken();

        $greekChef = new GreekChef();

        $greekChef->makeGiro();

     ?> 
    
    
</body>
</html> 