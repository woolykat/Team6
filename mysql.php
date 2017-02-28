
<!--- Author: Rachel
Created: 28/02/17 
Last Modified: 28/02/17 
Parts worked on: 

--->


<?php
include "base.php";
session_start();

if(isset($_POST["submit"])){
$email = $_POST ['email'];
    $password = $_POST['password'];
    
$query mysqli_query (" SELECT * FROM users WHERE email ='"$email"' AND password ='"$password"'");


$numrows =  mysql_num_rows($query);
if($numrows!=0)
{
while ($row = mysqli_fetch_assoc($query))
{
$dbemailname = $row['email'];
    $dbpassword = $row['password'];

}
    
    if ($email == $dbemailname && $dbpassword)
    {
    session_start['sess_email']=$email;
        header("Location:")
    
    }
}

}


}
?>



