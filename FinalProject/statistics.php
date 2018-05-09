<?php

include 'header.php';
include '../dbConnection.php';


?>

<div id="mainDiv">
    <?php
        $conn = getDatabaseConnection("FinalProj");
    
        echo "<h4> Number of Non-Admin Users: </h4>";
        $sql = "SELECT COUNT(userID) FROM users WHERE admin = 0";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //print_r($record);
        echo $record['COUNT(userID)'] . "<br/><br/>";
        
        echo "<h4> Number of Blog Posts in General Discussion: </h4>";
        $sql = "SELECT COUNT(postID) FROM posts WHERE forumID = 1";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //print_r($record);
        echo $record['COUNT(postID)'] . "<br/><br/>";
        
        echo "<h4> Number of Blog Posts in Game Projects: </h4>";
        $sql = "SELECT COUNT(postID) FROM posts WHERE forumID = 2";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //print_r($record);
        echo $record['COUNT(postID)'] . "<br/><br/>";
        
        echo "<h4> Number of Blog Posts in Events: </h4>";
        $sql = "SELECT COUNT(postID) FROM posts WHERE forumID = 3";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //print_r($record);
        echo $record['COUNT(postID)'] . "<br/><br/>";
    ?>
</div>

<?php

include 'footer.php';

?>