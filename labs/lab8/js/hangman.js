var selectedWord = "";
var selectedHint = "";
var board = []; //array declaration
//var board = new Array; <- old variation to declare an array;
var remainingGuesses = 6;
var words = [{word: "snake", hint: "It's a reptile"},
            {word: "monkey", hint: "It's a mammal"},
            {word: "beetle", hint: "It's an insect"},
            {word: "horse", hint: "It's a mammal"},
            {word: "pirahna", hint: "It's a fish"}];
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

window.onload = startGame();

function startGame(){
    pickWord();
    initBoard();
    updateBoard();
    createLetters();
}

function initBoard(){
    for(var letter in selectedWord){
        board.push("_");
    }
}

function pickWord(){
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
}

function updateBoard(){
    $("#word").empty();
    
    for(var i = 0; i < board.length; i++){
        $("#word").append(board[i] + " ");
    }
    
    $("#word").append("<br />");
    
}

function createLetters(){
    for (var letter of alphabet){
        $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
    }
}

function disableButton(btn){
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}

function updateWord(positions, letter){
    for(var pos of positions){
        board[pos] = letter;
    }
    updateBoard();
}

function checkLetter(letter){
    var positions = new Array();
    
    for (var i = 0; i < selectedWord.length; i++){
        if(letter == selectedWord[i]){
            positions.push(i);
        }
    }
    
    if(positions.length > 0){
        updateWord(positions, letter);
        
        if(!board.includes('_')){
            endGame(true);
        }
    } else {
        remainingGuesses -= 1;
        updateMan();
    }
    
    if(remainingGuesses <= 0){
        endGame(false);
    }
}

function endGame(win){
    $("#letters").hide();
    
    if(win){
        $('#won').show();
        $("#hint").hide();
        $("#guessedWords").append(selectedWord + " ");
    } else {
        $('#lost').show();
    }
}

function updateMan(){
    $("#hangImg").attr("src", "img/stick_" + (6-remainingGuesses) + ".png");
}

$("#hint").click(function(){
    remainingGuesses -= 1;
    updateMan();
    
    if(remainingGuesses <= 0){
        endgame(false);
    } else {
        $("#hint_txt").append("<span class='hint'>Hint: " + selectedHint + "</span>");
        $("#hint").hide();
    }
});

$(".letter").click(function(){
    checkLetter($(this).attr("id"));
    disableButton($(this));
});

$(".replayBtn").on("click", function(){
    location.reload();
});
