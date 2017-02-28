
<!--- Author: Rachel
Created: 28/02/17 
Last Modified: 28/02/17 
Parts worked on: 

--->


<?php
include "PHP/base.php";
    session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


mysqli_query($conn, "SELECT * FROM users ".$username."");





      echo("<br>Welcome Back $username");




 mysqli_close($conn);
?>


