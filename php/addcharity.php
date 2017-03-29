<?php session_start(); include"base.php";



$defaultHours = $_POST['defaultHours'];
$charityselected= $_POST['addcharity'];
$volunteeridno=$_SESSION['volunteer_ID'];
echo $volunteeridno;
echo $charityselected;
echo $defaultHours;

$addQuery="INSERT INTO recordhours(volunteerID,charityID,hours) VALUES(".$volunteeridno.", ".$charityselected.",".$defaultHours.")";
    
mysqli_query($conn,$addQuery) or die('Sorry! An internal error occurred: Invalid Query. Please try again later'); 
 
echo '<script type="text/javascript">
           window.location = "https://scm.ulster.ac.uk/~Team6/mvp2/v.profile.php"
      </script>';
 ?>
