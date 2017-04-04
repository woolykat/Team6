<?php session_start(); include"php/base.php"?>
<html>

<head>
   <title>Volunteer Profile</title> 
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/v.profile.css">
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
$(document).ready(function(){
    $("#show").click(function(){
        $(".hidden").show();
    });
});
    
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
<a href="#"><?php echo $_SESSION['login_volunteer']; ?></a>
                   <ul>
      <li><a href="V.Profile.php">Profile</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      </ul>
                   
                   
                   </li>
  
</ul>
            </div>
   

    </header>
 

<div id="profile">
       <div class="main">

          
        
     <ul class="summary">
           
           <li><p><?php echo $_SESSION['login_volunteer']; ?></p></li>
         <li><p>Total Volunteer Hours
 
         <?php

         
$query="SELECT sum(hours) FROM recordhours WHERE volunteerID= ".$_SESSION['volunteer_ID']."";

$result= mysqli_query ($conn, $query)
or die ('Invalid Query'); 


if (mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)) {
            
       ?>
         <?php $totalhours=$row["sum(hours)"]; echo $row["sum(hours)"]; ?></p></li>
 
         <?php
         
         
         ;
 
    }
   
}
$queryorg="SELECT count(recordHoursID) FROM recordhours WHERE volunteerID= ".$_SESSION['volunteer_ID']."";

$resultorg= mysqli_query ($conn, $queryorg)
or die ('Invalid Query'); 


if (mysqli_num_rows($resultorg) > 0) {
    while($roworg=mysqli_fetch_assoc($resultorg)) {
        
          
     echo "<li><p>Helped at " . $roworg["count(recordHoursID)"]. " organisations</p></li>";
         
         
         
         

 
    }
   
}
?> 
         
         
           </ul>
           <div id="editprofile">
           <button class="register" onclick="window.location.href='editprofile.php'">Edit Profile</button></div>
           <div id="ProfileMenu">
                
             
      <h3>Update Hours</h3>
      
      
          <form action="" method="post">
          <select id="optionHours" name="charitychosen">
               <option value="" disabled selected>Select the charity to add hours</option>
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
              
              </select>
         <input type="text" name="addhours" placeholder="Enter number of hours to add"/>
              <input type="submit" name="submit" value="Update" />
          </form>
         
      <?php




if(isset($_POST['submit'])){
$charitychosen = $_POST['charitychosen'];
$addhours = $_POST['addhours'];// Storing Selected Value In Variable

    
    

    $charityquery="SELECT hours FROM recordhours WHERE charityID = ".$charitychosen." AND volunteerID=".$_SESSION['volunteer_ID']."";
 
$result0= mysqli_query ($conn, $charityquery)
or die ('Invalid Query'); 


if (mysqli_num_rows($result0) > 0) {
    while($row0=mysqli_fetch_assoc($result0)) {
            
       
 $hoursBefore= $row0["hours"]; 
        
    $updatedHours=$hoursBefore+$addhours;
       
      
           $updatequery="UPDATE recordhours SET hours=$updatedHours WHERE charityID = ".$charitychosen." AND volunteerID=".$_SESSION['volunteer_ID']."";
    
mysqli_query($conn ,$updatequery) or die('Sorry! An internal error occurred: Invalid Query. Please try again later'); 
 
 echo $addhours. " hour(s) added to your record";
    }
    
    $_SESSION['charitychosen'] = $charitychosen;
    $_SESSION['hoursPrevious'] = $hoursBefore;
    ?><form action="php/undohours.php"><input id="undobutton" type="submit" name="submit" value="undo"></form><?php 
   
}
}

 
     ?>
</div>
    <div id="ProfileMenu">

  
        
    

        
    <br>
         <h3>Add an organisation</h3>
        <form action="php/addcharity.php" method="post">
          <select name="addcharity">
               <option value="" disabled selected>Select the charity</option>
          <?php
$query4= "SELECT charity_name, charityID FROM charity_user";
$result4= mysqli_query ($conn, $query4) or die ("Invalid query");
$num4 = mysqli_num_rows($result4);
$col4 = mysqli_num_fields($result4);

while ($row4 = mysqli_fetch_array($result4))
{
          
          
          ?>
          <option name="addcharity" value="<?php echo $row4['charityID'];?>"> <?php echo $row4['charity_name'];?></option>
              
              <?php } ?>
              
              </select>
         <input type="text" name="defaultHours" placeholder="Enter hours already volunteered with this charity"/>
              <input type="submit" name="Add" value="Add" alt="Add"/>
          </form> 
        
    


    
    
    
     
</div> 

           
           
           
           
           
           
           
              <br>
           
           <h3>Current Volunteering</h3><br>
           <?php
 

$query3= "SELECT * FROM recordhours, charity_user WHERE charity_user.charityID = recordhours.charityID AND volunteerID=".$_SESSION['volunteer_ID']."";
$result3= mysqli_query ($conn, $query3) or die ("Invalid query");
$num3 = mysqli_num_rows($result3);
$col3 = mysqli_num_fields($result3);

while ($row3 = mysqli_fetch_array($result3))
{
    $current3=$row3['currently'];
   if ($current3==1){
    ?>
               <ul class="progress">
  <!--  Item  CSS skill-->
<li data-name="<?php echo $row3['charity_name'];?>" data-percent="<?php echo $row3['hours']; ?>"> 
<svg viewBox="-10 -10 220 220">
    <g fill="none" stroke-width="14" transform="translate(100,100)">
      <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
      <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
      <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
      <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
      <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
      <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
    </g>
    </svg> <svg viewBox="-10 -10 220 220">
    <path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="629"></path>
    </svg> </li>
</ul>
    

<!--  Defining Angle Gradient Colors  --> 
<svg width="0" height="0">
<defs>
  <linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl3" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl4" gradientUnits="objectBoundingBox" x1="1" y1="1" x2="0" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl5" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="0" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl6" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="1" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
</defs>
</svg>
         
         <?php } }?>
         <hr>
         <h3>Previous</h3><br>
             <?php
 

$query2= "SELECT * FROM recordhours, charity_user WHERE charity_user.charityID = recordhours.charityID AND volunteerID=".$_SESSION['volunteer_ID']."";
$result2= mysqli_query ($conn, $query2) or die ("Invalid query");
$num2 = mysqli_num_rows($result2);
$col = mysqli_num_fields($result2);

while ($row2 = mysqli_fetch_array($result2))
{
    $current=$row2['currently'];
   if ($current==0){
    ?>
               <ul class="progress">
  <!--  Item  CSS skill-->
<li data-name="<?php echo $row2['charity_name'];?>" data-percent="<?php echo $row2['hours']; ?>"> 
<svg viewBox="-10 -10 220 220">
    <g fill="none" stroke-width="14" transform="translate(100,100)">
      <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
      <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
      <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
      <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
      <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
      <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
    </g>
    </svg> <svg viewBox="-10 -10 220 220">
    <path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="629"></path>
    </svg> </li>
</ul>
    

<!--  Defining Angle Gradient Colors  --> 
<svg width="0" height="0">
<defs>
  <linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl3" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl4" gradientUnits="objectBoundingBox" x1="1" y1="1" x2="0" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl5" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="0" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl6" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="1" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
</defs>
</svg>
         
         <?php } }?>         
 
         
  
        
   
  
  <hr>
      
      <h2>Your rewards</h2>
      <div class="VolunteerProfileMedals">
      <?php  

if ($totalhours > 10){
    
?>
      <ul>
         <li> <div class=figure><img src="img/medal(bronze).png"><p>10 hours achieved!</p></div></li>
          <?php } 
          if ($totalhours > 25){
          
          ?>
       
          <li> <div class=figure><img src="img/medal(silver).png"><p>25 hours achieved!</p></div></li>
          
          <?php } 
          if ($totalhours > 50){
          ?>
          <li> <div class=figure><img src="img/medal(Gold).png"><p>50 hours achieved!</p></div></li>
          <?php
              
          }

?>
          </ul>
      </div>
   
        <script>
// When the user clicks on <div>, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
           
    
    </div>
          </div>
        </body>
</html>
