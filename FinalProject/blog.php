<?php

include 'header.php';
include '../dbConnection.php';
$conn = getDatabaseConnection("FinalProj");

function displayBlogCategories(){
    global $conn;
    $sql = "SELECT * FROM forums";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
}

function displayBlogPosts(){
    global $conn;
    $sql = "SELECT * FROM posts WHERE forumID = " . $_GET['forum'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
}

?>

<br/><br/>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete it?")
    }
</script>

<div id="mainDiv">
    
    <?php
        if(empty($_GET['forum'])){
            $records = displayBlogCategories();
            foreach($records as $record){
                echo "<a href='blog.php?forum=".$record['forumID']."'> ". $record['forumType'] ."</a><br/>";
                echo "<div id='forum". $record['forumID'] ."'></div><br/><br/>";
            }
        } else {
            $records = displayBlogPosts();
            
            if(!empty($_SESSION['admin'])){
                    echo "<form method='POST' action='createPost.php'>
                        <div class='form-group' style='text-align:left'>
                        <label for='forumType'>Post Type:</label>
                            <input style='width: 100px' type='text' class='form-control' name='forumID' id='forumID' placeholder='Number ID of the Forum' value='". $_GET['forum'] ."'/> <br/>
                        </div>
                        <div class='form-group' style='text-align:left'>
                            <label for='postTopic'>Topic Name:</label>
                            <input style='width: 40%' type='text' class='form-control' name='postTopic' id='postTopic' placeholder='Topic Name'/> <br/>
                        </div>
                        <div class='form-group' style='text-align:left'>
                            <label for='postTxt'>Post Content:</label>
                            <input style='width:80%' type='text' class='form-control' name='postText' id='postTxt' placeholder='Input the post text here'/>
                        </div>
                        <input class='btn btn-default' id='submit' type='submit' value='Create Post'>
                    </form>";
            }
            
            
            foreach($records as $record){
                echo "<strong><h2 id='post' style='text-decoration:underline;'>". $record['postTopic'] ."</h2></strong><br/>";
                echo "<h4> " . $record['postText'] . " </h3>";
                if(!empty($_SESSION['admin'])){
                    echo "<form method='GET' onsubmit='return confirmDelete()' action='deletePost.php'>
                            <div class='form-group' style='text-align:left'>
                            <label for='forumType'>Post ID:</label>
                                <input style='width: 100px' type='text' class='form-control' name='postID' id='postID' placeholder='Number ID of the Forum' value='". $record['postID'] . "'/> <br/>
                            </div>
                            <input class='btn btn-default' id='delete' type='submit' name=". $record['postID'] ." value='Delete Post'/>
                          </form>";
                }
                echo "<br/><br/>";
                
                
                
                
            }
        }
    ?>
    
</div><!--end mainDiv-->

<?php

include 'footer.php';

?>