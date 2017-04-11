<?php
include "php/base.php";

$image="images/ColourRun.jpg";
$image = addslashes(file_get_contents($_FILES['image']['ColourRun.jpg']));
//you keep your column name setting for insertion. I keep image type Blob.
$query = "INSERT INTO Featuredcamps (Featured_image,image) VALUES('','$image')";  
$qry = mysqli_query($db, $query);
     ?>