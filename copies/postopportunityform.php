<!-- Simple form to allow charities to post to the opportunity folder in the database, no styling applied-->
<!--- Author: Clea
Created: 23/02/17 
Last Modified: 23/02/17 
Parts worked on: 

--->

<?php 
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


?>

