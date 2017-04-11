<?php session_start();
if(!$_SESSION['login']){
   header("location:home.php");
   die;
}
?>
<html>

<head>
   <title>Volunteer Track Homepage</title> 
    <link rel="stylesheet" type="text/css" href="css/opportunity.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <li><a href="contactus.php">Contact US</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      </ul>
                   
                   
                   </li>
  
</ul>
            </div>

        <div id="container">
        <main>
     
        <div class="opportunitypage">
   
        <?php


        $data = $_GET["data"];
       


  
$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));

mysqli_select_db($conn , 'Team6') or die ('Database will not open');

$query="SELECT * FROM opportunity WHERE opportunityID = ".$data."";

$result= mysqli_query ($conn, $query)
or die ('Invalid Query'); 


if (mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)) {
        
          
     echo "<h2>" . $row["opportunity_name"]. "</h2><br/><h3>Location</h3> <br/>" . $row["address"] . "</br>" . "<h3>About the Opportunity</h3>" . $row["description"] . "<h3>What is required?</h3>" . $row["requirements"] . "</br>";
         
         
         
         

 
    }
   
}
 

else {
    echo "<0 results";
}
     

                     
     
?>   
  

   
          
              
                    <?php
        

$query3 ="SELECT * from charity_user, opportunity where opportunity.charityID = charity_user.charityID AND opportunityID = '$data'";

$result3= mysqli_query ($conn, $query3)
or die ('Invalid Query'); 


if (mysqli_num_rows($result3) > 0) {
    while($row3=mysqli_fetch_assoc($result3)) {


         ?>
            <a href="mailto:<?php echo $row3["email"];  ?>">
                    <button id="buttoncontact"type="button" value="Email Us">Contact</button>
            
</a>

     </div>  
            
       <?php }} mysqli_close ($conn); ?>
         
        </main>
        
      
        </div>

        </body>

</html>
