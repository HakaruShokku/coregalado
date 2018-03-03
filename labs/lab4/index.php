<?php
   
   //http://getbootstrap.com/ <-- website for bootstrap
    
    if(isset($_GET['keyword'])){//
        include 'api/pixabayAPI.php';
        
        echo "<h3>You searched for " . $_GET['keyword'] . "</h3>";
        
        if(isset($_GET['layout'])){
            $orientation = $_GET['layout'];
        }
        
        if(!empty($_GET['category'])){
            $category = $_GET['category'];
        }
        
        $imageURLs = getImageURLs($_GET['keyword'], $orientation);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
        //print_r($imageURLs);
    }
    else{
        echo "<h2> Type a keyword to display a slideshow <br/> with random images from Pixabay.com</h2>";
        $backgroundImage = "img/sea.jpg";
    }
    
    function checkCategory($category){
        if($category == $_GET['category']){
            echo " selected";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 4: Pixabay Carousel </title>
        
    </head>
    
    <style>
        @import url(https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css);
        @import url("css/styles.css");
        body{
            background-image: url(<?=$backgroundImage?>);
        }
        
        #carouselExampleIndicators{
            width:500px;
            margin: 0 auto;
        }
    </style>
    
    <body>
        
        <form method="GET">
            <input type="text" name="keyword" size="20" placeholder="Keyword to search for" value="<?=$_GET['keyword']?>"/>
            
            <input type="radio" name="layout" value="horizontal" id="hlayout" <?=($_GET['layout']=="horiontal")?"checked":""?>><label for="hlayout"> Horizontal </label> 
            <input type="radio" name="layout" value="vertical" id="vlayout" <?=($_GET['layout']=="vertical")?"checked":""?>><label for="vlayout" > Vertical </label> 
            
            <br/><br/>
            
            <select name="category">
                <option value="" <?=checkCategory('')?>> Select One </option>
                <option value="sea" <?=checkCategory('sea')?>> Ocean </option>
                <option value="forest" <?=checkCategory('Forest')?>> Forest </option>
                <option value="sky" <?=checkCategory('Sky')?>> Sky </option>
                <option value="mountain" <?=checkCategory('Mountain')?>> Mountain </option>
            </select>
            <br/><br/>
            <input type="submit" value="Submit"/>
        </form>
        
        <?php
            
            if(isset($_GET['keyword'])){
        ?>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                
            </ol>
        <div class="carousel-inner">
            
            <?php
                for($i=0; $i< 7; $i++){
                    do{
                        $randomIndex = rand(0,count($imageURLs));
                    }
                    while(!isset($imageURLs[$randomIndex]));
                    
                    if($i == 0){
                        echo "<div class='carousel-item active'><img class='d-block w-100' src='" . $imageURLs[$randomIndex] . "' width='200' alt='slide ". $i ."'></div>";
                    }
                    else{
                        echo "<div class='carousel-item'><img class='d-block w-100' src='" . $imageURLs[$randomIndex] . "' width='200' alt='slide ". $i ."'></div>";
                    }
                    unset($imageURLs[$randomIndex]);
                }
            ?>
            
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <?php
            }
        ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>