<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2: 777 Slot Machine </title>
        <meta charset = "utf-8"/>
    </head>
    <body>
        
        <!-- make sure there isn't space between ? and php, like the following php code tag below -->
        <?php 
        
            function displaySymbol($randomValue){
                //$randomValue = rand(0,5);
                echo $randomValue;
        
                // if($randomValue == "0"){
                //   $symbol = "seven";
                //     echo "<img src = 'img/$symbol.png' width ='70' alt='$symbol' title='$symbol' />"; 
                // } else if($randomValue == "1"){
                //     $symbol = "orange";
                //     echo "<img src = 'img/$symbol.png' width ='70' alt='$symbol' title='$symbol' />";
                // } else if($randomValue == "2"){
                //     $symbol = "cherry";
                //     echo "<img src = 'img/$symbol.png' width ='70' alt='$symbol' title='$symbol' />";
                // } else if($randomValue == "3"){
                //     $symbol = "lemon";
                //     echo "<img src = 'img/$symbol.png' width ='70' alt='$symbol' title='$symbol' />";
                // } else if($randomValue == "4"){
                //     $symbol = "grapes";
                //     echo "<img src = 'img/$symbol.png' width ='70' alt='$symbol' title='$symbol' />";
                // } else {
                //     $symbol = "bar";
                //     echo "<img src = 'img/$symbol.png' width ='70' alt='$symbol' title='$symbol' />";
                // }
                
                switch($randomValue){
                    case 0: echo "<img src = 'img/seven.png' width ='70' alt='seven' title='seven' />";
                        break;
                    case 1: echo "<img src = 'img/orange.png' width ='70' alt='orange' title='orange' />";
                        break;
                    case 2: echo "<img src = 'img/cherry.png' width ='70' alt='cherry' title='cherry' />";
                        break;
                    case 3: echo "<img src = 'img/lemon.png' width ='70' alt='lemon' title='lemon' />";
                        break;
                    case 4: echo "<img src = 'img/bar.png' width ='70' alt='bar' title='bar' />";
                        break;
                    case 5: echo "<img src = 'img/grapes.png' width ='70' alt='grapes' title='grapes' />";
                        break;
                }
                
            }
            
            $randomValue1 = rand(0,5);
            displaySymbol($randomValue1);
            $randomValue2 = rand(0,5);
            displaySymbol($randomValue2);
            $randomValue3 = rand(0,5);
            displaySymbol($randomValue3);
            
            echo "<br/><hr> $randomValue1 $randomValue2 $randomValue3"
            
        
        // for($i=0; $i <3;$i++){
        //     displaySymbol();
        // }
        
        ?>


<!--
        <img src = "img/lemon.png" width ="70" alt="Lemon" title="Lemon" />
        <img src = "img/cherry.png" width ="70" alt="Cherry" title="Cherry" />
        <img src = "img/orange.png" width ="70" alt="Orange" title="Orange" />
-->

    </body>
</html>