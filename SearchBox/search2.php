<html>
<head>
    </head>
    <body>
         <form action="" method="post">
        <input type="text" name="search"/>
        <input type="submit" name="submit" value="search"/>
    </form>
<?php
 if (isset($_POST['submit'])) {   
$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));

mysqli_select_db($conn , 'Team6') or die ('Database will not open');

$search=$_POST['search'];

$query="SELECT * FROM opportunity WHERE keywords LIKE '%".$search."%'";

$result= mysqli_query ($conn, $query)
or die ('Invalid Query'); 


if (mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)) {
        echo "opportunity name: " . $row["opportunity_name"]. "<br/>";
    }
} 

else {
    echo "0 results";
}

mysqli_close ($conn);
     }
?> 
</body>
</html>