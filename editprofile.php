<?php session_start(); include"php/base.php";
if(!$_SESSION['login']){
   header("location:home.php");
   die;
}
?>
<html>

<head>
   <title>Volunteer Profile</title> 
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/editprofile.css">
    <link rel="stylesheet" type="text/css" href="css/extra.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="jqueryjquery-3.1.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">

    <link href="css/Hover-master/css/hover.css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <script>
function deletefunction() {
    var txt;
    var r = confirm("Are you sure you want to delete your account?!");
    if (r == true) {
        txt = "Your account has been deleted, we are sorry to see you go!";
    } else {
        txt = "";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
</head>
    <body>
        
   
       
    <header>
      <div class="nav">
                   <ul class="titlelist">
               <li> <img src="media/logo.png" class="logo"><span class="logotitle">Volunteer Track</span></li>
           
              
            </ul>
                
               <ul id="rightside">
  <li><a class="active" href="index.php">Home</a></li>
  <li>
<a href="V.Profile.php"><?php echo $_SESSION['login_volunteer']; ?></a>
                   <ul>
      <li><a href="V.Profile.php">Profile</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      </ul>
                   
                   
                   </li>
  
</ul>
            </div>
   

    </header>
 


       <div class="main">
           <h2>Settings</h2>
<ul class="settingsmenu">
           
    <li><button class="button volunteerbutton" onclick="window.location.href='editvolunteer.php'">Volunteering</button></li>
    <li><button onclick="window.location.href='editprofile.php'">Personal Information</button></li>
    <li><button id="selected3" onclick="deletefunction()">Delete Account</button></li>
           
           
</ul>
         <br>  
		   
		   
		   
		<div id="personal">
				<h3>Change your account information</h3>	
			<?php 

include"php/base.php";
$query= "SELECT username, name FROM users WHERE volunteerid=".$_SESSION['volunteer_ID']."";
$result= mysqli_query ($conn, $query) or die ("Invalid query");
$num = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result))
{
    ?> 


			
			
			
			<form method="post" name="myForm" enctype="multipart/form-data" onsubmit="">
				<table>
	
	
	<tr><th>Username:</th> <td><input type="text" value="<?php echo $row['username'] ?>" name="username"></td></tr>
<tr><th>Full Name: <td><input type="text" name="fullname" value="<?php echo $row['name'] ?>"></td></tr>
<tr><th>Password: <td><input type="password" name="user_password"></td></tr>



<?php
} ?>
		<tr><th>Profile Image:</th> <td><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"></td></tr></table>
					<br><input type="submit" value="update" name="update"/>
			</form>
		   <?php
if (isset($_POST['update'])) { 

$fullname=$_POST["fullname"];
$username=$_POST["username"];
$userpassword=$_POST["user_password"];

$imagename=$_FILES["userfile"]["name"];

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

 
 

$sql = "UPDATE users SET Name='$fullname', profile_image ='$imagetmp', username= '$username', password='$userpassword' WHERE volunteerID=".$_SESSION['volunteer_ID']."";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
	


$conn->close();
	
}

?>
		   
		   
		   
		   
		   </div>
          </div>
        </body>
</html>
