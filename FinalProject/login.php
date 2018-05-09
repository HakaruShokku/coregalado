<?php

include 'header.php';

if(!empty($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
}

?>

<script>
    
</script>

<br/><br/>
<div id="mainDiv" style="text-align:left">
    <div class="login">
            <form method="POST" action="loginProcess.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input style="width: 100px" type="text" class="form-control" 
                    name="username" id="usernameBox" placeholder="Username"/> <br/>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input style="width:100px" type="password" class="form-control" 
                    name="password" id="pwd" placeholder="Password"/>
                </div>
                <input class="btn btn-default" id="submit" type="submit" value="Login">
            </form>
        </div>
</div>

<?php
    include 'footer.php';
?>