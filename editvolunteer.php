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
    <link rel="stylesheet" type="text/css" href="css/circleanimation.css">
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
     <div id="volunteer">
           
       <h3>Select a charity to change</h3>
      
      
          <form action="" method="post">
          <select id="optionHours" name="charitychosen" size="7" class="selections">
          
          <?php
$query1= "SELECT charity_name, recordhours.charityID FROM recordhours, charity_user WHERE charity_user.charityID = recordhours.charityID AND volunteerID=".$_SESSION['volunteer_ID']."";
$result1= mysqli_query ($conn, $query1) or die ("Invalid query");
$num1 = mysqli_num_rows($result1);
$col1 = mysqli_num_fields($result1);

while ($row1 = mysqli_fetch_array($result1))
{
          
          
          ?>
          <option name="charitychosen" value="<?php echo $row1['charityID'];?>">  <?php $charityname=$row1['charity_name']; echo $row1['charity_name'];?></option>
              
              <?php } ?>
              
              </select><br><br>
              <input type="submit" id="optionradio" name="action" value="No longer volunteering here"/>
              <input type="submit" id="deletered" name="action" value="Delete from record"/>
              
          </form>
          <?php


if(isset($_POST['action'])){
if ($_POST['action'] == 'No longer volunteering here') {
    $charitychosen = $_POST['charitychosen'];
    $updatequery="UPDATE recordhours SET currently=0 WHERE charityID = ".$charitychosen." AND volunteerID=".$_SESSION['volunteer_ID']."";
    
mysqli_query($conn ,$updatequery) or die('Sorry! An internal error occurred: Invalid Query. Please try again later'); 
 
 echo "Record updated";
    
    
} else if ($_POST['action'] == 'Delete from record') {
       $charitychosen = $_POST['charitychosen'];
    $deletequery="DELETE FROM recordhours WHERE charityID = ".$charitychosen." AND volunteerID=".$_SESSION['volunteer_ID']."";
    
mysqli_query($conn ,$deletequery) or die('Sorry! An internal error occurred: Invalid Query. Please try again later'); 
 
 echo "Charity Deleted";
} else {
    echo "Something went wrong!";
}
}

?>
    </div>
		   
		   
		
          </div>
        </body>
</html>
