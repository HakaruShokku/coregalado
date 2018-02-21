<?php
    
    function getCard($rand1, $rand2){
        if($rand1 == 0 )
        {
            $suit = "clubs";
        }
        else if ($rand1 == 1)
        {
            $suit = "diamonds";
        }
        else if($rand1 == 2)
        {
            $suit = "hearts";
        }
        else
        {
            $suit = "spades";
        }
        
        if($rand2 == 0){
            $value = "ten";
        }
        else if($rand2 == 1){
            $value = "jack";
        }
        else if($rand2 == 2){
            $value = "queen";
        }
        else if($rand2 == 3){
            $value = "king";
        }
        else{
            $value = "ace";
        }
        
        echo"<img src = 'img/cards/$suit/$value.png' /> ";
        
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <meta charset = "utf-8"/>
       <style>
        @import url("css/style.css");
            
        </style>
        
        
    </head>
    <body>
        
        <h1>Random Card Game</h1>
        <main>
            <div>
                Human
                
                Computer
            </div>
            <?php
                $rand1 = rand(0,3);
                $rand2 = rand(0,4);
                getCard($rand1, $rand2);
                
                $rand3 = rand(0,3);
                $rand4 = rand(0,4);
                getCard($rand3, $rand4);
                
                if($rand2 > $rand4){
                    echo "Human wins";
                }
                else if($rand2 < $rand4){
                    echo "Computer Wins";
                }
                else{
                    echo "Tie game";
                }
            ?>
        </main>

    </body>
</html>