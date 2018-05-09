<?php

include 'header.php';

?>

<script>
    
    $(document).ready(function(){
        
        $("#usernameBox").change( function(){ 
                //alert( $("#usernameBox").val() )
                    
                $.ajax({
                    type: "GET",
                    url: "checkUsername.php",
                    dataType: "json",
                    data: { "username": $("#usernameBox").val() },
                    success: function(data,status) {
                         //alert(data);
                         
                         if (!data) {  //data == false
                         
                            //alert("Username is Available");
                            $("#avail").show();
                            $("#taken").hide();
                            
                         } else {
                             
                            //alert("Username is ALREADY TAKEN");
                            $("#avail").hide();
                            $("#taken").show();
                         }
                         
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                }
            });//ajax
        });
        
        $("#pwd").change( function(){ 
            //alert("hi");
           if($('#pwd2').val() != $('#pwd').val()) {
               $("#match").show();
           } else {
               $("#match").hide();
           }
        });
        
        $("#pwd2").change( function(){ 
            //alert( $("#username").val() )
           if($('#pwd2').val() != $('#pwd').val()) {
               $("#match").show();
           } else {
               $("#match").hide();
           }
        }); 
        
    });//documentReady

    
</script>

<br/>
<div id="mainDiv" style="text-align:left">
    
        <div class="signup">
            <form method="POST" action="createLogin.php">
                <div class="form-group">
                    <label for="usernameLabel">Username:</label>
                    <input style="width: 100px" type="text" class="form-control" name="username" id="usernameBox"/> 
                    <br/>
                    <div id="avail" style="color:green">This Username is Available</div>
                    <div id="taken" style="color:red">This Username is already used</div>
                </div>
                
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input style="width:100px" type="password" class="form-control" name="password" id="pwd"/>
                </div>
                
                <div class="form-group">
                    <label for="pwd2">Confirm Password:</label>
                    <input style="width:100px" type="password" class="form-control" id="pwd2"/>
                </div>
                <div id="match" style="color:red"> Passwords do not match </div>
                
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input style="width:100px" type="text" class="form-control" name="email" id="email"/>
                </div>
                
                <div class="form-group">
                    <label for="firstName">First Name: </label>
                    <input style="width:100px" type="text" class="form-control" name="firstName" id="firstName"/>
                </div>
                
                <div class="form-group">
                    <label for="lastName">Last Name: </label>
                    <input style="width:100px" type="text" class="form-control" name="lastName" id="lastName"/>
                </div>
                
                <script> $("#match").hide(); </script>
                
                
                <input class="btn btn-default" type="submit" value="Sign Up" name="loginForm">
            </form>
            
        </div>
        
        <script> 
            $("#avail").hide();
            $("#taken").hide();
        </script>
</div>        
<?php
    include 'footer.php';
?>