<?php 
include 'inc/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2: 777 Slot Machine </title>
        <meta charset = "utf-8"/>
        
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        
        <!-- make sure there isn't space between ? and php, like the following php code tag below -->
        <div id="main">
            <?php 
                play();
            ?>
            
            <form>
                <input type="submit" value="Spin!"/>
            </form>
        </div>


<!--
        <img src = "img/lemon.png" width ="70" alt="Lemon" title="Lemon" />
        <img src = "img/cherry.png" width ="70" alt="Cherry" title="Cherry" />
        <img src = "img/orange.png" width ="70" alt="Orange" title="Orange" />
-->
        
    </body>
</html>