<?php session_start();
if(!$_SESSION['login']){
   header("location:home.php");
   die;
}
?>
<!doctype html>

<head>
   <title>Volunteer Track Apply for a Campaign</title> 
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/post.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    
</head>
    <body>
        
      <div id="container">
        
            <header>
  

  
            <div class="nav">
                   <ul class="titlelist">
               <li> <img src="media/logo.png" class="logo"><span class="logofont">Volunteer Track</span></li>
           
              
            </ul>
                
               <ul id="rightside">
  <li><a  href="post.php">Post an Opportunity</a></li>
  <li><a class="active" href="applyForFeature.php">Post a Campaign</a></li>
  <li>
<a href="#"><?php echo $_SESSION['login_charity']; ?></a>
                   <ul>
      <li><a href="contactus2.php">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      </ul>
                   
                   
                   </li>
  
</ul>
            </div>
        
        
   
    </header>
     
         <div class="main">
        <div class="postForm">
        <h2>Apply for a Feature Campaign</h2>
<form method="post" name="myForm" onsubmit="return validateForm();" enctype="multipart/form-data">
    <table>
        <tr><th>Campaign Title:<span class="star">*</span><br><span>Ice Bucket Challenge, Color Run etc</span></th><td><input type="text" name="title" onChange="validateTitle();"/></td>
        
            <!--error titlev must not be blank-->
            <td><input type="text" id="titlev" name="titlev" value="&#10008; Title must not be blank" style="display: none;" Readonly="Readonly"/></td>
            
            <!--titlelv (length Validation must not be longer than 40 characters-->
            <td><input type="text" id="titlelv" name="titlelv" value="&#10008; Title must not be more than 40 letters" style="display: none;" Readonly="Readonly"/></td>
    
        
            <!--titlenv (Number Validation must not be longer than-->
            <td><input type="text" id="titlenv" name="titlelv" value=" &#10008; Can't contain only numbers" style="display: none;" Readonly="Readonly"/></td>
        </tr>
        
    <tr><th>Upload Image to display:</th><td><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> </td></tr>

        <tr><th>Campaign Start Date<br><span>YYYYMMDD</span></th><td><input type="text" name="sDate"/></td></tr> 
            <tr><th>Campaign End Date<br><span>YYYYMMDD</span></th><td><input type="text" name="eDate"/></td></tr>    
    
        <tr><th>Web Address:<span class="star">*</span><br><span>Provide the website for more information about your campaign.</span></th><td><input type="text" name="website" onChange="validateWebsite();"/></td>
        
     </table>
    <input type="submit" value="submit" name="submit"/>

<?php 

$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));
mysqli_select_db($conn , 'Team6') or die ('Database will not open');



if (isset($_POST['submit'])) { 



// defining the fields from opportunityform

$title=$_POST["title"];
$sDate=$_POST["sDate"];
$eDate=$_POST["eDate"];
    $website=$_POST["website"];
$charityusername= $_SESSION['login_charity'];

$imagename=$_FILES["userfile"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['userfile']['tmp_name']));



 

$getID = "SELECT charityID FROM charity_user WHERE username = '$charityusername'";

$IDresult = mysqli_query($conn,$getID);
    
  while($row=mysqli_fetch_assoc($IDresult)) {    
   
$charityID= $row["charityID"];
$query="INSERT INTO featuredcamps(featured_Name,charityID,start_date,expiry_date,website,featured_image) VALUES( '$title','$charityID','$sDate','$eDate', '$website', '$imagetmp')";
    
mysqli_query($conn ,$query) or die('Invalid Query');
    echo "<tr><td>Success! Submitted</tr></td>";
    
  }
mysqli_close ($conn);
}

?>

  
      </div>      
  
            
       
         
        </div>

   
 
   
      
        </div>
         
        </body>
</html>
