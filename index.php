<html>

<head>
   <title>Volunteer Track Homepage</title> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <div id="container">
        <?php  
include"php/base.php";
?>
       
    <header>
        <img src="images/logosmall.png" class="logo">
<h1>Welcome to Volunteer Track</h1>
        
  <nav>  
<ul>
  <li><a href="contactus.html">Help</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Profile</a></li>
  <li><a href="">Search</a></li>
</ul>
        </nav>
    </header>
    
<main>

<div class="intro">
      <iframe src="https://www.youtube.com/embed/zYPc03_1ifs" allowfullscreen></iframe>
    
<p>Welcome to volunteer track are webiste is designed to keep you on track and moving in the right direction when it comes to volunteering.Please feel free to browse our website as well as your newly created personal page!</p>
    
    
    </div>
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
      //  echo "opportunity name: " . $row["opportunity_name"]. "<br/>";
         ?>
<a href="<?php echo $row["opportunityID"]; ?>.php"><?php echo $row["opportunity_name"]; ?></a><br />
<?php
    }
   
}
 

else {
    echo "0 results";
}
     

    
  

mysqli_close ($conn);
     }
?>  
            
            
            
        </main>
            
        <footer>Copyright Volunteer Track</strong></footer>
      </div>
        
        </body>
</html>
