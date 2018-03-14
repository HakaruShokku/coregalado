<?php
$weapons = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

function checkHunterType($hunterType){
        if($hunterType == $_GET['hunterType']){
            echo " selected";
        }
    }

//References to index coordination:
    //0-2: bow, bowgun, gunLance
    //3-5: insectGlaive, switchAxe, chargeBlade
    //6-8: dualBlade, greatSword, longSword
    //9-12: hammer, huntingHorn, lance, swordAndShield
?>

<!DOCTYPE html>
<html>
    <head>
        
        <style>
            @import url("css/styles.css");
        </style>
        <img src="img/logo.jpg" id="logo">
        <title> What Weapon Type do you use, Hunter? </title>
        
    </head>
    <body>
        
        <?php
            
            if($_GET['$hunterType'] == 'carefully'){
                $weapons[10]=$weapons[9]=$weapons[12]+=2;
            }
            elseif($_GET['hunterType'] == 'surprise'){
                $weapons[3]=$weapons[4]=$weapons[5]+=2;
            }
            elseif($_GET['hunterType'] == 'headOn'){
                $weapons[6]=$weapons[7]=$weapons[8]=$weapons[11]+=2;
            }
            elseif($_GET['hunterType'] == 'distance'){
                $weapons[0]=$weapons[1]=$weapons[2]+=2;
            }
            
            $offsetter = intval($_GET['CaptureOrKill']);
            if($offsetter!= 0){
                $weapons[0] += 3-$offsetter;
                $weapons[1] += 3-$offsetter;
                $weapons[3] += 3-$offsetter;
                $weapons[7] += 3-$offsetter;
                $weapons[9] += 3-$offsetter;
                $weapons[10] += 3-$offsetter;
                $weapons[2] += $offsetter-3;
                $weapons[4] += $offsetter-3;
                $weapons[5] += $offsetter-3;
                $weapons[6] += $offsetter-3;
                $weapons[8] += $offsetter-3;
                $weapons[11] += $offsetter-3;
                $weapons[12] += $offsetter-3;
            }
            
            $weaponVal = 3;
            
            if($_GET['weapon'] == "bigBlade"){
                $weapons[4] += $weaponVal;
                $weapons[5] += $weaponVal;
                $weapons[7] += $weaponVal;
                $weapons[8] += $weaponVal;
            }
            if($_GET['weapon1'] == "smallBlade"){
                $weapons[6] += $weaponVal;
                $weapons[12] += $weaponVal;
            }
            if($_GET['weapon2'] == "hammer"){
                $weapons[9] += $weaponVal;
                $weapons[10] += $weaponVal;
            }
            if($_GET['weapon3'] == "gun"){
                $weapons[0] += $weaponVal;
                $weapons[1] += $weaponVal;
                $weapons[2] += $weaponVal;
            }
            if($_GET['weapon4'] == "other"){
                $weapons[3] += $weaponVal;
                $weapons[11] += $weaponVal;
            }
            
            $offsetter1 = intval($_GET['aloneOrTogether']);
                if($offsetter1!= 0){
                    $weapons[2] += 3-$offsetter1;
                    $weapons[5] += 3-$offsetter1;
                    $weapons[6] += 3-$offsetter1;
                    $weapons[8] += 3-$offsetter1;
                    $weapons[9] += 3-$offsetter1;
                    $weapons[11] += 3-$offsetter1;
                    $weapons[12] += 3-$offsetter1;
                    $weapons[0] += $offsetter1-3;
                    $weapons[1] += $offsetter1-3;
                    $weapons[3] += $offsetter1-3;
                    $weapons[4] += $offsetter1-3;
                    $weapons[7] += $offsetter1-3;
                    $weapons[10] += $offsetter1-3;
                }
        
            foreach ($weapons as $weapon){
                //echo "<h1>$weapon</h1>";
            }
            
            $displayImg = False;
            $maxWeapon = 0;
            $maxScore = 0;
            for($i = 0; $i < 13; $i+=1){
                if($weapons[$i] > 0){
                    if($weapons[$i] > $maxScore){
                        $maxWeapon = $i;
                        $maxScore = $weapons[$i];
                        $displayImg = True;
                    }
                }
            }
            
            if(!$displayImg){
                echo "<h1 id='title'> What Weapon Type do you use, Hunter? </h1>";
            }
            else{
                switch($maxWeapon){
                    case 0:
                        echo "<h1 id='weaponType'>Your weapon type is Bow</h1>";
                        echo "<img src='img/0.jpeg' id='logo'>";
                        break;
                    case 1:
                        echo "<h1 id='weaponType'>Your weapon type is Bow Gun</h1>";
                        echo "<img src='img/1.jpeg' id='logo'>";
                        break;
                    case 2:
                        echo "<h1 id='weaponType'>Your weapon type is Gun Lance</h1>";
                        echo "<img src='img/2.png' id='logo'>";
                        break;
                    case 3:
                        echo "<h1 id='weaponType'>Your weapon type is Insect Glaive</h1>";
                        echo "<img src='img/3.jpeg' id='logo'>";
                        break;
                    case 4:
                        echo "<h1 id='weaponType'>Your weapon type is Switch Axe</h1>";
                        echo "<img src='img/4.png' id='logo'>";
                        break;
                    case 5:
                        echo "<h1 id='weaponType'>Your weapon type is Charge Blade</h1>";
                        echo "<img src='img/5.png' id='logo'>";
                        break;
                    case 6:
                        echo "<h1 id='weaponType'>Your weapon type is Dual Blades</h1>";
                        echo "<img src='img/6.png' id='logo'>";
                        break;
                    case 7:
                        echo "<h1 id='weaponType'>Your weapon type is Great Sword</h1>";
                        echo "<img src='img/7.jpeg' id='logo'>";
                        break;
                    case 8:
                        echo "<h1 id='weaponType'>Your weapon type is Long Sword</h1>";
                        echo "<img src='img/8.jpeg' id='logo'>";
                        break;
                    case 9:
                        echo "<h1 id='weaponType'>Your weapon type is Hammer</h1>";
                        echo "<img src='img/9.png' id='logo'>";
                        break;
                    case 10:
                        echo "<h1 id='weaponType'>Your weapon type is Hunting Horn</h1>";
                        echo "<img src='img/10.jpeg' id='logo'>";
                        break;
                    case 11:
                        echo "<h1 id='weaponType'>Your weapon type is Lance</h1>";
                        echo "<img src='img/11.png' id='logo'>";
                        break;
                    case 12:
                        echo "<h1 id='weaponType'>Your weapon type is Sword and Shield</h1>";
                        echo "<img src='img/12.png' id='logo'>";
                        break;
                }
                echo "<br><a href ='index.php' id='surveyReset'><input type='reset' value='Try Again'></a>";
                //echo "<h1>$maxWeapon</h1>";
                
                //References to index coordination:
                    //0-2: bow, bowgun, gunLance
                    //3-5: insectGlaive, switchAxe, chargeBlade
                    //6-8: dualBlade, greatSword, longSword
                    //9-12: hammer, huntingHorn, lance, swordAndShield
            }
        ?>
        
        <div id='surveyUI'>
            <form>
                <h1>When considering hunting a monster, how do you think you would approach it?</h1><br/>
                <div id="questionBox">
                    <div id="leftSide">
                        <input type="radio" name="hunterType" value="carefully" <?=($_GET['hunterType']=="carefully")?"checked ":""?>> Carefully 
                        <br/>
                        <input type="radio" name="hunterType" value="surprise" <?=($_GET['hunterType']=="surprise")?"checked ":""?>> By Surprise
                    </div>
                    <div id="rightSide">
                        <input type="radio" name="hunterType" value="headOn" <?=($_GET['hunterType']=="headOn")?"checked ":""?>> Head On <br/>
                        <input type="radio" name="hunterType" value="distance" <?=($_GET['hunterType']=="distance")?"checked ":""?>> From a Distance
                    </div>
                </div>

                <br/>

                <h1>What would you want to do with that monster?</h1><br/>
                <div id="questionBox">
                    I would Capture it <input type="range" name="CaptureOrKill" min="1" max="5" value=<?=($_GET['CaptureOrKill'])?>> I would Slay it
                </div>

                <br/>

                <h1>What among these would you consider using?</h1><br/>
                <div id="questionBox">
                    <div id="leftSide">
                        <input type="checkbox" name="weapon" value="bigBlade" <?=($_GET['weapon']=="bigBlade")?" checked ":""?>> Big Blade <br/>
                        <input type="checkbox" name="weapon1" value="smallBlade" <?=($_GET['weapon1']=="smallBlade")?" checked ":""?>> Small Blade(s) <br/>
                    </div>
                    <div id="rightSide">
                        <input type="checkbox" name="weapon2" value="hammer" <?=($_GET['weapon2']=="hammer")?" checked ":""?>> Hammer <br/>
                        <input type="checkbox" name="weapon3" value="gun" <?=($_GET['weapon3']=="gun")?" checked " :""?>> Bow/Gun <br/>
                        <input type="checkbox" name="weapon4" value="other" <?=($_GET['weapon4']=="other")?" checked ":""?>> Other
                    </div>
                    <?php
                    
                    ?>
                </div>
                
                <br/>
                
                <h1>Would you consider hunting in a group, or do you prefer going alone?</h1><br/>
                <div id="questionBox">
                    I prefer to go Solo <input type="range" name="aloneOrTogether" min="1" max="5" value=<?=($_GET['aloneOrTogether'])?>> I like a great team
                </div>
                <?php
                
                ?>
                                
                <br/><br/>
                <input type="submit" name="Submit">
                <input type="reset" value="Reset">
                <br/>
            </form>
        </div>
    </body>
</html>