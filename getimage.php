<?php
include"php/base.php";
header("Content-Type: image/jpeg");
echo $image;

$sql = "SELECT * FROM featuredcamps WHERE FeaturedId = $3";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
