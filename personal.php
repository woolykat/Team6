<?php session_start();

include"php/base.php";
$query= "SELECT username, name FROM users WHERE volunteerid=".$_SESSION['volunteer_ID']."";
$result= mysqli_query ($conn, $query) or die ("Invalid query");
$num = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result))
{
    ?> 
<form>
<table>
	
	
	<tr><th>Username:</th> <td><input type="text" value="<?php echo $row['username'] ?>"></td></tr>
<tr><th>Full Name: <td><input type="text" value="<?php echo $row['name'] ?>"></td></tr>
</table>
</form>
<?php
} ?>
mysqli_close ($conn);
?>