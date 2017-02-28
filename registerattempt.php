
<!--- Author: Rachel
Created: 23/02/17 
Last Modified: 23/02/17 
Parts worked on: 

--->


<?php
include "base.php";
    
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$PasswordComfirmation = $_POST['PasswordConfirmation'];

  
      $register="INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $register) or die ("<br>Invalid Query");
      echo("<br>Hi $username");
 mysqli_close($conn);
?>



