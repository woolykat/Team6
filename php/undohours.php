<?php session_start(); include"base.php";


        $undothequery="UPDATE recordhours SET hours=".$_SESSION['hoursPrevious']." WHERE charityID = ".$_SESSION['charitychosen']." AND volunteerID=".$_SESSION['volunteer_ID']."";

   mysqli_query($conn ,$undothequery) or die('Sorry! An internal error occurred: Invalid Query. Please try again later'); 


echo '<script type="text/javascript">
           window.location = "../v.profile.php"
      </script>';
 ?>
