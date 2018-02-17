<?php?

    function getRandomColor(){
        
        echo "color: rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(0,100)).");";
        
    }

>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Color </title>
        
        <style>
            
            body{
                
                <?php
                
                    $red = rand(0,255);
                    $blue = rand(0,255);
                    $green = rand(0,255);
                    $alpha = rand(0,100)/100;
                    
                    echo "background-color: rgba($red,$green,$blue,$alpha);";
                    echo "color: rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(0,100)).");";
                
                ?>
                
            }
            
            h1{
                
                <?php
                
                    $red = rand(0,255);
                    $blue = rand(0,255);
                    $green = rand(0,255);
                    $alpha = rand(0,100)/100;
                    
                    echo "background-color: rgba($red,$green,$blue,$alpha);";
                
                ?>
                
            }
            
            h2{
            
                color: <?php getRandomColor() ?>
                background-color: <?= getRandomColor() ?>
            
            }
            
        </style>
        
    </head>
    <body>
        
        <h1> Welcome! </h1>
        
        <h2> Random Background Color! </h2>

    </body>
</html>