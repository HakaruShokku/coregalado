<?php 

function play(){
        for($i=1; $i<4; ++$i){
            ${"randomValue" . $i} = rand(0, 3);
            displaySymbol(${"randomValue" . $i}, $i);
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
    }

function displayPoints($randomValue1, $randomValue2, $randomValue3){
                
                echo "<div id ='output'>";
                if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
                    switch($randomValue1){
                        case 0: $totalPoints = 1000;
                            echo "<h1>Jackpot!</h1>";
                            break;
                        case 1: $totalPoints = 500;
                            break;
                        case 2: $totalPoints = 250;
                            break;
                        case 3: $totalPoints = 900;
                    }
                    
                    echo "<h2> You won $totalPoints points!</h2>";
                }
                else{
                    echo "<h3> Try again! </h3>";
                }
                echo "</div>";
            }
        
            function displaySymbol($randomValue, $pos){
                
                switch($randomValue){
                    case 0: echo "<img id='reel$pos' src = 'img/seven.png' width ='70' alt='seven' title='seven' />";
                        break;
                    case 1: echo "<img id='reel$pos' src = 'img/lemon.png' width ='70' alt='orange' title='orange' />";
                        break;
                    case 2: echo "<img id='reel$pos' src = 'img/cherry.png' width ='70' alt='cherry' title='cherry' />";
                        break;
                    case 3: echo "<img id='reel$pos' src = 'img/bar.png' width ='70' alt='lemon' title='lemon' />";
                        break;
                    case 4: echo "<img id='reel$pos' src = 'img/orange.png' width ='70' alt='bar' title='bar' />";
                        break;
                    case 5: echo "<img id='reel$pos' src = 'img/grapes.png' width ='70' alt='grapes' title='grapes' />";
                        break;
                }
                
            }

?>
