<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
    }
}

function insert() {
    echo "The insert function is called.";
     $updatedHours=$hoursBefore+$addhours;
       
      
           $updatequery="UPDATE recordhours SET hours=$updatedHours WHERE charityID = ".$charitychosen." AND volunteerID=".$_SESSION['volunteer_ID']."";
    
mysqli_query($conn ,$updatequery) or die('Sorry! An internal error occurred: Invalid Query. Please try again later'); 
    exit;
}
?>