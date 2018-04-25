<?php
include "inc/functions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Rock Paper Scissors </title>
        <style>
            @import url("css/styles.css");
        </style>
        <h1 id='title'> Rock Paper Scissors </h1>
    </head>
    <body>
        <div id="game">
            <table>
                <tr id="header"><th> Results: </th></tr>
                <tr>
                    <?php
                        $player1 = array();
                        array_push($player1, rand(0,2), rand(0,2), rand(0,2));
                        shuffle($player1);
                        
                        $player2 = array();
                        array_push($player2, rand(0,2), rand(0,2), rand(0,2));
                        shuffle($player2);
                        
                        for($i = 0; $i < 3; $i++){
                            displayRound($GLOBALS[player1][$i], $GLOBALS[player2][$i]);
                            echo "<br/>";
                        }
                    ?>
                </tr>
            </table>
        </div>
        
        <div id="win"><strong>
            <h3>
                <?php
                    getWinner($score1, $score2);
                ?>
            </h3>
        </strong></div>
        
        <footer>
            <hr>
            
            CST-336 Internet Programming. 2018&copy; Regalado<br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.
            
            <figure>
                <img src = "img/csumbLogo.png" id="otter" alt = "CSUMB Logo"/>
            </figure>
            
        </footer>
        
    </body>
    
</html>