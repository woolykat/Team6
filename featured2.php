<?php
include "php/base.php";
$todaysdate=date("Ymd");
$sql = "SELECT featured_image,featured_name FROM featuredcamps WHERE start_date< ".$todaysdate." AND expiry_date>".$todaysdate."";
$sth = $conn->query($sql);

  while($result=mysqli_fetch_array($sth)) {
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['featured_image'] ).'"/>';
echo $result['featured_name'];
  }
?>