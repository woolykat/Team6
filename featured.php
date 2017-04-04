<?php
include "php/base.php";
$sql =  "SELECT featuredId FROM featuredcamps"; 
$result = mysqli_query($conn, $sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>

</HEAD>
<BODY>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<img src="featured2.php? featuredId=<?php echo $row["featuredId"]; ?>" /><br/>
<?php		
}
mysqli_close($conn);
?>
</BODY>
</HTML>