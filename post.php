<html>

<head>
   <title>Volunteer Track Homepage</title> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        
   
        
            <header>
  

           
        <img src="images/logosmall.png" class="logo">
        <br>
           
<h1>Volunteer Track</h1>
        
        
  <nav>  
<ul>
   
    
  <li><a href="contactus.html">Contact Us</a></li>
  <li><a href="post1.php">Post</a></li>
</ul>
        </nav>
    </header>
        <div id="container">
        <main>
            <br><br>
        
   
        <h2>Post a Volunteer Opportunity</h2>
<form action="" method="post">
    
    
    <table>
        <tr><td><label>Title:</label></td></tr> <tr><td><input type="text" name="title"/></td></tr> <br/>
        <tr><td><label>Description:<br/></label></td></tr> <tr><td> <textarea name="description"> please enter comma separated keywords related to the opportunity</textarea></td></tr> <br/>
        <tr><td><label>Requirements:</label></td></tr> <tr><td> <input type="text" name="requirements"/> </td> </tr> <br/>
        <tr><td><label>Town:</label></td></tr> <tr><td><input type="text" name="location"/></td></tr> <br/>
        <tr><td><label>Address:</label></td></tr> <tr><td> <input type="text" name="address"/> </td> </tr> <br/>
        <tr><td><label>(Keywords please enter comma separated keywords related to the opportunity):<br/></td></tr></label> <tr><td> <input type="text" name="keywords"/> </td> </tr>
    
    <tr><td><input type="submit" value="submit" name="submit"/></td></tr>
    </table>
            
    </form>
<br/>

<?php 

$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));
mysqli_select_db($conn , 'Team6') or die ('Database will not open');



if (isset($_POST['submit'])) { 

//connect to the database



// defining the fields from opportunityform.html

$title=$_POST["title"];
$desc=$_POST["description"];
$require=$_POST["requirements"];
$location=$_POST["location"];
$address=$_POST["address"];
$keywords=$_POST["keywords"];



$query="INSERT INTO opportunity(opportunity_name,location,address,description, requirements,keywords) VALUES( '$title','$location','$address','$desc','$require','$keywords')";
    
mysqli_query($conn ,$query) or die('Invalid Query');
    echo "Success! Submitted";
    

mysqli_close ($conn);
}

?>

       
            
       
         
        </main>
            
        <footer>Copyright Volunteer Track</strong></footer>
   
 
            </main>
      
        </div>
         
        </body>
</html>
