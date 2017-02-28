<?php


session_start();
if(!isset($_SESSION["sess_user"])){
header("location:lohin.php");
    

}
else{


?>


<html>
<head>
    <title>Memeber Profile</title>
    
    </head>
<body>
    <h2>Welcome Back, <? = $_SESSION['sess_user'];?></h2>
    
    
    </body>

</html>