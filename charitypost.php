<html>
<head>
    
    
    </head>
    
    <body>
        
        <h2>Post a Volunteer Opportunity</h2>
<form action="" method="post">
    
    
    <label>Title:</label><input type="text" name="title"/> <br/>
    <label>Description:<br/></label><textarea name="description"> please enter comma separated keywords related to the opportunity</textarea> <br/>
    <label>Requirements:</label><input type="text" name="requirements"/> <br/>
    <label>Town:</label><input type="text" name="location"/> <br/>
    <label>Address:</label><input type="text" name="address"/> <br/>
    <label>Keywords please enter comma separated keywords related to the opportunity):<br/></label><input type="text" name="keywords"/> <br/>
    
    
    <input type="submit" value="submit"/>
    
    </form>


<?php 
if (isset($_POST['submit'])) { 
//connect to the database

include "base.php";

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




    </body>




</html>