<?php session_start();
if(!$_SESSION['login']){
   header("location:home.php");
   die;
}
?>
<!doctype html>

<head>
   <title>Volunteer Track Homepage</title> 
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/post.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<script type="text/javascript" language="JavaScript">
          
      //Title validation
            function validateTitle(){
            var hit = 0;
    
            var tv = document.forms["myForm"]["title"].value;
            if (tv == "") {
                document.getElementById("titlev").style.display = 'block';
                hit = 1;
                //return false;  
            } else if (tv.length > 40) {
                document.getElementById("titlelv").style.display = 'block';
                hit = 1;
                //return false;
            } else if (tv.match(/^\d+$/)) {
                document.getElementById("titlenv").style.display = 'block';
                hit = 1;
                //return false;
            }
            else{
                 document.getElementById("titlev").style.display = 'none';
                 document.getElementById("titlenv").style.display = 'none'; 
                 document.getElementById("titlelv").style.display = 'none';
            }
        }
           
    
    
    //Description validation
        function validateDescription(){
            var hit = 0;
        
            var dv = document.forms["myForm"]["description"].value;
            if (dv == "") {
                document.getElementById("descriptionv").style.display = 'block';
                hit = 1;  
            } 
            else{
                document.getElementById("descriptionv").style.display = 'none'; 
            }
        }
    
    
    
        
         //address validation
            function validateAddress(){
            var hit = 0;
    
            var av = document.forms["myForm"]["address"].value;
            if (av == "") {
                document.getElementById("addressv").style.display = 'block';
                hit = 1;
    
            } else if (av.length > 60) {
                document.getElementById("addressv2").style.display = 'block';
                hit = 1;
            } 
            else{
                 document.getElementById("addressv").style.display = 'none';
                 document.getElementById("addressv2").style.display = 'none'; 
            }
        }
           
    
    
    
            //Keywords validation
            function validateKeywords(){
            var hit = 0;
    
            var kv = document.forms["myForm"]["keywords"].value;
            if (kv == "") {
                document.getElementById("keywordsv").style.display = 'block';
                hit = 1;
    
            } else if (kv.length > 300) {
                document.getElementById("keywordsv2").style.display = 'block';
                hit = 1;
            } 
            else{
                 document.getElementById("keywordsv").style.display = 'none';
                 document.getElementById("keywordsv2").style.display = 'none'; 
            }
        }
           
    

    
    
    
    function validateForm() 
        {
          var hit = 0;
            
          //Title validation
          var tv = document.forms["myForm"]["title"].value;
          if (tv == "") 
          {
              document.getElementById("titlev").style.display='block';
              hit=1;
          }
             else if (tv.length > 40) 
             {
                 document.getElementById("titlelv").style.display='block';
                  hit=1;
             }

            else if (!tv.match(/^[a-z]+$/)) 
             {
                 document.getElementById("titlenv").style.display='block';
                  hit=1;
             }
            
            else if (tv.length > 40) 
             {
                 document.getElementById("titlev").style.display = 'none';
                 document.getElementById("titlelv").style.display = 'none';
                 document.getElementById("titlenv").style.display = 'none';
                //return false;
             }
            
            
            
             //description validation
          var dv = document.forms["myForm"]["description"].value;
          if (dv == "") 
          {
              document.getElementById("descriptionv").style.display='block';
              hit=1;
          }
            
            
            
            
             //Address validation
          var av = document.forms["myForm"]["address"].value;
          if (av == "") 
          {
              document.getElementById("addressv").style.display='block';
              hit=1;
          }
             else if (av.length > 60) {
                 document.getElementById("addressv2").style.display='block';
                  hit=1;
             }
               else if (av.length < 60) {
                 document.getElementById("addressv").style.display = 'none';
                 document.getElementById("addressv2").style.display = 'none';
             }

            
            
            
                
             //Keywords validation
          var kv = document.forms["myForm"]["keywords"].value;
          if (kv == "") 
          {
              document.getElementById("keywordsv").style.display='block';
              hit=1;
          }
             else if (kv.length > 300) {
                 document.getElementById("keywordsv2").style.display='block';
                  hit=1;
             }
               else if (kv.length < 300) {
                 document.getElementById("keywordsv").style.display = 'none';
                 document.getElementById("keywordsv2").style.display = 'none';
             }

            
            
            

              if (hit == 1) 
                 {
                     return false;
                 }
            
        }

    
    
    
    </script>
    
</head>
    <body>
        
      <div id="container">
        
            <header>
  

  
            <div class="nav">
                   <ul class="titlelist">
               <li> <img src="media/logo.png" class="logo"><span class="logofont">Volunteer Track</span></li>
           
              
            </ul>
                
               <ul id="rightside">
                
  <li><a class="active" href="post.php">Post an Opportunity</a></li>
                        <li><a href="applyForFeature.php">Post a Campaign</a></li>
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
        <h2>Post a Volunteer Opportunity</h2>
<form method="post" name="myForm" onsubmit="return validateForm();">
    <table>
        <tr><th>Opportunity Title:<span class="star">*</span><br><span>Fundraising, Volunteering First Aider, Cafe Assistant etc</span></th><td><input type="text" name="title" onChange="validateTitle();"/></td>
        
            <!--error titlev must not be blank-->
            <td><input type="text" id="titlev" name="titlev" value="&#10008; Title must not be blank" style="display: none;" Readonly="Readonly"/></td>
            
            <!--titlelv (length Validation must not be longer than 40 characters-->
            <td><input type="text" id="titlelv" name="titlelv" value="&#10008; Title must not be more than 40 letters" style="display: none;" Readonly="Readonly"/></td>
    
        
        <!--    titlenv (Number Validation must not be longer than
            <td><input type="text" id="titlenv" name="titlelv" value=" &#10008; Can't contain only numbers" style="display: none;" Readonly="Readonly"/></td>
        </tr>-->
        
            
        <tr><th>Description Of Opportunity:<span class="star">*</span><br><span>Information about the role etc</span></p></th><td><textarea name="description" maxlength=1000 col="25" rows="5" onChange="validateDescription();"></textarea></td>
            
            <!--error description must not be blank-->
            <td><input type="text" id="descriptionv" name="descriptionv" value=" &#10008; Description must not be blank" style="display: none;" Readonly="Readonly"/></td>    
            </tr> 
        
        <tr><th>Opportunity Requirements:<br><span>Valid driving License, correct age, any experience required etc</span></th><td><input type="text" name="requirements"/></td></tr> 
            
        <tr><th>Address Line 1<span class="star">*</span></th><td><input type="text" name="address" onchange="validateAddress();"/></td>
            
            <!--error Address must not be blank-->
             <td><input type="text" id="addressv" name="addressv" value="&#10008; Address must not be blank" style="display: none;" Readonly="Readonly"/>
            
             <!--error Address must not be more than 60 letters-->
            <input type="text" id="addressv2" name="addressv2" value="&#10008; Address must not be more than 60 letters" style="display: none;" Readonly="Readonly"/>
            </td>
            
            </tr> 
            
        <tr><th>Address Line 2</th><td><input type="text" name="location"/></td></tr> 
            
        <tr><th>Keywords:<span class="star">*</span><br><span>E.g Fun, belfast, helping, fist aid etc</span></th><td><input type="text" name="keywords" onchange="validateKeywords();"/></td>
          
          <!--error Keywords must not be blank-->
            <td><input type="text" id="keywordsv" name="keywordsv" value="&#10008; Keywords must not be blank" style="display: none;" Readonly="Readonly"/>
          
             <!--error Keywords must not be more than 300 letters-->
            <input type="text" id="keywordsv2" name="keywordsv2" value="&#10008; Keywords must not be more than 300 letters" style="display: none;" Readonly="Readonly"/>
            </td>
          
          </tr>
    
        
     </table>
    <input type="submit" value="submit" name="submit"/>

<?php 

$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));
mysqli_select_db($conn , 'Team6') or die ('Database will not open');



if (isset($_POST['submit'])) { 



// defining the fields from opportunityform

$title=$_POST["title"];
$desc=$_POST["description"];
$require=$_POST["requirements"];
$location=$_POST["location"];
$address=$_POST["address"];
$keywords=$_POST["keywords"];
    
        $charityusername= $_SESSION['login_charity'];

$getID = "SELECT charityID FROM charity_user WHERE username = '$charityusername'";

$IDresult = mysqli_query($conn,$getID);
    
  while($row=mysqli_fetch_assoc($IDresult)) {    
   
$charityID= $row["charityID"];
$query="INSERT INTO opportunity(opportunity_name,location,address,description, requirements,keywords,charityID) VALUES( '$title','$location','$address','$desc','$require','$keywords','$charityID')";
    
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
