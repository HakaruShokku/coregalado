
var player1 = [];
var player2 = [];

var score1 = 0, score2 = 0;

//window.onload = startGame();

function startGame(){
    $("#playBtn").hide();
    $("#gameResults").show();
    initHands();
    displayRounds();
    getWinner();
}
/* global $ */
function getWinner(){
    $("#win").append(" The score is " + score1 + " to " + score2 + "</br>");
    if(score1 > score2){
        $("#win").append("Player 1 Wins!");
    }
    else if(score1 < score2){
        $("#win").append("Player 2 Wins!");
    }
    else{
        $("#win").append("Tie game.");
    }
    
    $("#replay").show();
}

function initHands(){
    for(var i = 0; i < 3; i++){
        //player1.push((Math.floor(Math.random() * 3)));
        player2.push((Math.floor(Math.random() * 3)));
    }
}

function checkHands(rand1, rand2, handPos){
    console.log("handPos is " + handPos)
    if(rand1 == 0 && rand2 == 2){
        score1++;
        $("#hands" + handPos).append("<td><h1 id='compare'> > <h1></td>");
    }
    else if(rand1 == 2 && rand2 == 0){
        score2++;
        $("#hands" + handPos).append("<td><h1 id='compare'> < <h1></td>");
    }
    else if(rand1 == 1 && rand2 == 0){
        score1++;
        $("#hands" + handPos).append("<td><h1 id='compare'> > <h1></td>");
    }
    else if(rand1 == 0 && rand2 == 1){
        score2++;
        $("#hands" + handPos).append("<td><h1 id='compare'> < <h1></td>");
    }
    else if(rand1 == 2 && rand2 == 1){
        score1++;
        $("#hands" + handPos).append("<td><h1 id='compare'> > <h1></td>");
    }
    else if(rand1 == 1 && rand2 == 2){
        score2++;
        $("#hands" + handPos).append("<td><h1 id='compare'> < <h1></td>");
    }
    else{
        $("#hands" + handPos).append("<td><h1 id='compare'> = <h1></td>");
    }
}

function getHand(rand1, pos, handPos){
    
    switch (rand1){
        case 0:
            $("#hands" + handPos).append("<td><img id='column" + pos + "' src = 'img/rock.PNG' width ='100' alt='rock' title='rock' /></td>");
            break;
        case 1:
            $("#hands" + handPos).append("<td><img id='column" + pos + "' src = 'img/paper.PNG' width ='100' alt='paper' title='paper' /></td>");
            break;
        case 2:
            $("#hands" + handPos).append("<td><img id='column" + pos + "' src = 'img/scissors.PNG' width ='100' alt='scissors' title='scissors' /></td>");
            break;
    }
}

function displayRounds(){
    for(var j = 0; j < 3; j++){
        console.log("Round " + j);
        console.log("Player 1's hand is " + player1[j]);
        for(var i = 0; i < 3; i++){
            console.log("part " + i)
            if(i == 1){
                checkHands(player1[j], player2[j], j);
            }
            else if(i == 0){
                $("#hands" + j).append("<tr>");
                //console.log("creating round " + j);
                getHand(player1[j], i, j);
            }
            else{
                getHand(player2[j], i, j);
                $("#hands" + j).append("</tr>");
            }
        }
    }
}

function checkPlayerInput(){
    if(player1.length == 3){
        $("#playerOptions").hide();
        $("#playBtn").show();
    }
}

$(".throwHand").click(function(){
    player1.push(Number($(".throwHand").val()));
    checkPlayerInput();
});

$(".throwHand1").click(function(){
    player1.push(Number($(".throwHand1").val()));
    checkPlayerInput();
});

$(".throwHand2").click(function(){
    player1.push(Number($(".throwHand2").val()));
    checkPlayerInput();
});

$(".play").click(function()
{
   startGame(); 
});

/* global location*/
$(".replayBtn").click(function(){
    console.log("reset damnit");
    location.reload();
});