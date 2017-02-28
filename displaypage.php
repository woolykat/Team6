<html>
    <head>
        <title>Opportunities</title>
         <link href="css/opportunities.css" rel="stylesheet" type="text/css">
        <meta name="description" content="volunteering opportunities">
    <meta name="keywords" content="volunteering opportunities, oppos">
    </head>
    <header><h1>Oxfam</h1></header>
    <body>
        <main>
            <section>
              <?php


        $data = $_GET["data"];
       


  
$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));

mysqli_select_db($conn , 'Team6') or die ('Database will not open');

$query="SELECT * FROM opportunity WHERE opportunityID = ".$data."";

$result= mysqli_query ($conn, $query)
or die ('Invalid Query'); 


if (mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)) {
        
       
     echo "<h2>" . $row["opportunity_name"]. "</h2><br/><p><h3>Address</h3> <br/>" . $row["address"] . "</p>" . "<h3>Description</h3><p>" . $row["description"] . "</p><h3>Requirements</h3><p>" . $row["requirements"] . "</p>";
         
         
         
         
         
         ;
 
    }
   
}
 

else {
    echo "0 results";
}
     

    
  

mysqli_close ($conn);
     
?>          
          
            <footer></footer>
        </main>
    </body>
</html>