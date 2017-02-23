<?php
session_start();


?>



<!DOCTYPE HTML>
<html>
<head>
    
    <title>Home</title>
    </head>
<body>
    <div class="header">
    
    <h1>Home Page</h1>
        
    </div>
<div><h4>Welcome 
    <?php echo $_SESSION['username']; ?>
    </h4></div>
    
    </body>


</html>