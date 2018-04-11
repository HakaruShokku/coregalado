<?php

session_start();


if(!isset($_SESSION["numbers"])){
    $_SESSION["numbers"] = array();
}

$_SESSION["guesses"] = 0;


    //echo "created randNum";




echo "<form value='submit'>";
echo "<form value='submit'>";


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Guess a number between 1 and 10 </title>
        <form> Guess a number between 1 and 10
        <br/>
            <input type="text" name="number">
            <input value="Guess Number" type ="submit">
            </br>
             <input name="giveUp" value="Give up" type ="submit">
              <input name="playAgain" value="Play again" type ="submit">
              <?php
              //if(isset($_GET["Guess Number"]))
             // { echo"1";
                  if($_GET["playAgain"])
                  {
                  $_SESSION["randNum"]=rand(0,10);
                  }
                if(isset($_SESSION["randNum"]))
                {
                    
                
                  if(isset($_GET["number"]))
                  {
                      echo "2";
                      if($_GET["number"] == $_SESSION["randNum"]){
                          echo "Numbers of guesses " . sizeof($_SESSION["numbers"]) . " in ";
                          foreach($_SESSION["numbers"] as $item){
                              echo $item . " ";
                          }
                          $_SESSION["randNum"] = rand(1,10);
                      }
                      else{
                          echo"3";
                          array_push($_SESSION["numbers"], $_GET["number"]);
                          print_r($_SESSION["numbers"]);
                          $_SESSION["guesses"] += 1;
                      }
                  }
                  else{
                      echo "enter number";
                  }
                }
                else{
                    if(isset($_GET["giveUp"]))
                    {
                        session_unset();
                    }
                    else{
                        $_SESSION["randNum"]=rand(0,10);
                        $_SESSION["guesses"] = 0;
                    }
                }
              //}
              ?>
        </form>
    </head>
    <body>

    </body>
</html>