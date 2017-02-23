<?php
    
$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));
print "Successful Connection";
mysqli_select_db($conn , 'Team6') or die ('Database will not open');

$search=$_POST['search'];

$search_sqli="SELECT opportunity_name FROM opportunity WHERE keywords LIKE '%".$search."%'  OR description LIKE '%".$search."%'";


$search_query= mysqli_query ($conn, $search_sqli)
or die ('Invalid Query'); 
echo "success Submited";

if (mysqli_num_rows ($search_query) !=0) {
$search_rs= mysqli_fetch_assoc ($search_query);
}




$num = mysqli_num_rows ($search_query);
for ($i=1; $i<=$num; $i++)
{
    $row = mysqli_fetch_row($search_query);
    echo $row [0] . " " . $row [1] . "<br>";
    }

mysqli_close ($conn);
?>
