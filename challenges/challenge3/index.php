<?php
    function randChar() {
        $letters = array();
        for ($i = 'A'; $i <= 'Z'; $i++)
            $letters[] = $i;
        return $letters[rand(0, 25)];
    }
    
    function randNum() {
        $nums = array();
        for ($i = '0'; $i <= '9'; $i++)
            $nums[] = $i;
        return $nums[rand(0, 9)];
    }
    
    function getNChars($low, $high) {
        $n = rand($low, $high);
        $out = "";
        for ($i = 0; $i < $n; $i++)
            $out .= randChar();
        return $out;
    }
    
    function getNNums($low, $high) {
        $n = rand($low, $high);
        $out = "";
        for ($i = 0; $i < $n; $i++)
            $out .= randNum();
        return $out;
    }
    
    function getPassword() {
        $nNums = 0;
        $length = rand(5, 10);
        $out = "";
        $out .= getNChars(0, $length / 3);
        $out .= randNum();
        $nNums++;
        
        do{
            $out .= getNChars(0, $length-strlen($out));
            if(strlen($out) < $length && $nNums < 3){
                $nNums++;
                $out .= randNum();
            }
        }while($length > strlen($out));
        return $out;
    }
    
    function getNPasswords($n) {
        $pw = array();
        for (; $n > 0; $n--)
            $pw[] = getPassword();
        return $pw;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <table>
            <tr><th>Passwords</th></tr>
            <?php
                $passwords = getNPasswords(25);
                foreach ($passwords as $password)
                    echo "<tr><td>$password</td><tr>";
            ?>
        </table>
    </head>
    <body>
        
    </body>
</html>