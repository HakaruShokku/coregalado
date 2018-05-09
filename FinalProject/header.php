
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<?php

session_start();
//echo session_id();

echo "<script>
        $(document).ready( function(){";

//The following if else block  checks if there is a user logged in,
//and displays the login and signup options if there isn't logged in
//but displays the Username instead if they are logged in.

if(empty($_SESSION['username'])){
    echo "
          $('#username').hide();
          $('#logout').hide();
          $('#login').show();
          $('#signUp').show();";
} else {
    echo "$('#login').hide();
          $('#signUp').hide();
          $('#username').show();
          $('#logout').show();";
}

if(empty($_SESSION['admin'])){
    
    echo "$('#statistics').hide();";
}

echo "});
      </script>";

?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/styles.css");
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <title> </title>
    </head>
    <body style="background-image: url('img/background.png');">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <center>
                    <h1 class="display-4">Game Dev Blog </h1>
                    <p class="lead"><strong>"United We Develop"</strong></p>
                </center>
            </div>
        </div>
        
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="statistics.php" id="statistics"> Statistics </a></li>
                
                <li><a href="login.php" id="login">Login</a></li>
                <li><a href="signup.php" id="signUp">Sign-Up</a></li>
                <li><?php 
                        if(!empty($_SESSION["username"])){
                            $username = $_SESSION["username"];
                            echo "<a href='#'>".$username."</a></li>"; 
                        }
                    ?></strong></li>
                <li><a href="logoff.php" id="logout">Logout</a></li>
                
                
                </li>
              </ul>
              <form class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        

    </body>
    
    
    