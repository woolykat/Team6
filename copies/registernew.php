<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <title>Registration</title>
    </head>
<body>
    <div id="LeftSplit">
    <div class="header">

    <h1>Please Register</h1>
    </div>
    
    <form method="post" action="">
    
    <table>
        <tr>
        <td>Username:</td>
        <td><input type="text" name="username"></td>
            </tr>
        
        
        
        <tr>
        <td>Email:</td>
        <td><input type="text" name="email"></td>
            </tr>
        
        
        
        
        <tr>
        <td>Password:</td>
        <td><input type="text" name="password"></td>
            </tr>
        
      
        
   <tr>
        <td></td>
        <td><input type="submit" name="registerButton" value="Register"></td>
        </tr>
        
        </table>
    
    
    </form>
        </div>
    <div id="rightsplit">
    <div id="RegisterPageParagraphs">
    <h3>Please Register! Its quick easy and only takes a moment!</h3>
    <p>This will allow you to view access to your own online profile.</p>
    
    <p>Not to mention the ability to track the amount of volunteer hours you've done!</p>
        <p>Get rewards for your volunteer hours!</p>
        <p>Easy to find volunteer oppurtunties for you with volunteer track! </p>
    </div>
    </div>
    
    
         <?php  
include"php/base.php";
 if (isset($_POST['submit'])) {   
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


  
      $register="INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $register) or die ("<br>Invalid Query");
 } 
?>
    </body>


</html>