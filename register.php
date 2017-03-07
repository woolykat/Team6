<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Registration</title>
    </head>
<body>
    <div id="container">
    <div id="rightSplit">
        <div class="verticalCenter">
    <div class="header">

    <h1>Please Register</h1>
    </div>
    
    <form method="post" action="">
    

      

        <input type="text" name="username" placeholder="Username">
          
        
            </br>
        
      
 
      <input type="text" name="email" placeholder="Email">
          
        
        
        
        
  
      <input type="text" name="password" placeholder="Password">
        
        
      
                              <label class="volunteer"><input type="radio" name="toggle" value="volunteer" checked="checked"><span>I'm a Volunteer</span></label>
                         <label class="charity"><input type="radio" name="toggle" value="charity"><span>I'm a Charity</span></label>
                    
                        
        
 
  <input type="submit" name="submit" value="Register">
            </form>
        
            
<?php
 if (isset($_POST['submit'])) {  
include "php/base.php";
    
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
 $toggle =$_POST['toggle'];

if ($toggle=="volunteer"){
    

  
      $register="INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $register) or die ("<br>Invalid Query");


      echo("<br>You're registered! Please Log In below."); ?>  <form action="home.php">
    <input type="submit" value="Log In" />
</form><?php
    
}
     else {
  
      $register="INSERT INTO charity_user(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $register) or die ("<br>Invalid Query");


      echo("<br>You're registered! Please Log In below."); ?>  <form action="home.php">
    <input type="submit" value="Log In" />
</form>
        <?php
 mysqli_close($conn);
     }
 }
 


?>
           
   
            
        </div>
        </div>
 </div>
    </body>


</html>