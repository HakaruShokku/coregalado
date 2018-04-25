<?php 

$score1 = 0;
$score2 = 0;

function getHand($rand1, $pos){
    
    switch ($rand1){
        case 0:
            echo "<td><img id='column$pos' src = 'img/rock.PNG' width ='100' alt='rock' title='rock' /></td>";
            break;
        case 1:
            echo "<td><img id='column$pos' src = 'img/paper.PNG' width ='100' alt='paper' title='paper' /></td>";
            break;
        case 2:
            echo "<td><img id='column$pos' src = 'img/scissors.PNG' width ='100' alt='scissors' title='scissors' /></td>";
            break;
    }
}

function getWinner($score1, $score2){
    echo "The Score is $score1 to $score2 </br>";
    if($score1 > $score2){
        echo "Player 1 Wins!";
    }
    else if($score1 < $score2){
        echo "Player 2 Wins!";
    }
    else{
        echo "Tie game.";
    }
}

function checkHands($rand1, $rand2){
    if($rand1 == 0 && $rand2 == 2){
        $GLOBALS[score1]++;
        echo "<td><h1 id='compare'> > <h1></td>";
    }
    else if($rand1 == 2 && $rand2 == 0){
        $GLOBALS[score2]++;
        echo "<td><h1 id='compare'> < <h1></td>";
    }
    else if($rand1 == 1 && $rand2 == 0){
        $GLOBALS[score1]++;
        echo "<td><h1 id='compare'> > <h1></td>";
    }
    else if($rand1 == 0 && $rand2 == 1){
        $GLOBALS[score2]++;;
        echo "<td><h1 id='compare'> < <h1></td>";
    }
    else if($rand1 == 2 && $rand2 == 1){
        $GLOBALS[score1]++;
        echo "<td><h1 id='compare'> > <h1></td>";
    }
    else if($rand1 == 1 && $rand2 == 2){
        $GLOBALS[score2]++;;
        echo "<td><h1 id='compare'> < <h1></td>";
    }
    else{
        echo "<td><h1 id='compare'> = <h1></td>";
    }
}

function displayRound($rand1, $rand2){
    for($i = 0; $i < 3; $i++){
        if($i == 1){
            checkHands($rand1, $rand2, $i);
        }
        else if($i == 0){
            echo "<tr>";
            getHand($rand1, $i);
        }
        else{
            getHand($rand2, $i);
            echo "</tr>";
        }
    }
}

?>