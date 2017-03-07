<html>

<head>
   <title>Volunteer Track Homepage</title> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/Hover-master/css/hover.css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="description" content="Home page">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Volunteer Track">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        
   
       
    <header>
     
        <img src="media/volunteertrack.jpg" class="logo">
        <br>
           
<h1>Volunteer Track</h1>

        
  <nav>  
<ul>
   
  <li><a href="contactus.html">Help</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Profile</a></li>
  <li><a href="">Search</a></li>
</ul>
    
        </nav>
    </header>
 
 <div id="container">

   
  <main>  

<div class="intro">
   
   <br> <br>
<p>Welcome to volunteer track are webiste is designed to keep you on track and moving in the right direction when it comes to volunteering. Please feel free to browse our website as well as your newly created personal page!</p>
    
    <h2>Search For Opportunities </h2>
    </div>
    <div id="search">
                    <form action="" method="post">
        <input type="text" name="search"/>
        <input type="submit" name="submit" value="Search"/>
    </form>
        </div>
    <dv class="searchresults">
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
<a href="./displaypage.php?data=<?php echo $row["opportunityID"]; ?>"><div class="searchresults"><?php echo $row["opportunity_name"]; ?></a><br /><span>
<?php echo $row["location"]; echo "</span><br/></div>";
    }
   
}
 

else {
    echo "0 results";
}
     

mysqli_close ($conn);
     }
?>  
        
        
          
        <!---START OF CAMPAGNS---->
        
      <hr>  
        
        <div class="FeaturedCampaigns">
            
            
            <h2>Featured Campaigns </h2>
           
            <div id="LeftStyle">
        <img src="media/waterchallenge.png" alt="waterbucketchallenge">
             <h3>The Ice Buck Challenge!</h3>
                 <p>When: August 2017</p>
     <br>
                      <a href="hhttps://www.als.net/icebucketchallenge/">

                    <input type="button" class="button" value="Get Involved"></a><br>
                 <br>
           <br>
                
                
                
        </div><br><br>
         <hr>
            
            
            <div id="LeftStyle">
        <img src="media/ColourRun.jpg"alt="Colour run">
             <h3>The Colour Run!</h3>
            <p>When: Event Time change throughout the year</p>
                <br>
             
                <br>
                  
                
                <a href="http://thecolorrun.co.uk/events/">

                    <input type="button" class="button" value="Get Involved"></a>
                <br>
                <p>Dont forget to Donate and tag a friend to complete the challenge too!</p>
        <br><br><br><br><br>
         <hr>
            </div>
            <div id="LeftStyle">
       <img src="media/marathon.jpg"
             alt="Marathong Image">
             <h3>Belfast City Marathon!</h3>
                  <br>
                <p>When: Event Time change throughout the year</p>
            <br>
                
                    
                <a href="https://register.belfastcitymarathon.com/ps/event/DeepRiverRockBelfastCityMarathon">

                    <input type="button" class="button" value="Get Involved"></a>
                    
     <br>
                <p>Dont forget to Donate and tag a friend to complete the marathon with you!</p>
        </div><br><br><br><br><br>
         <hr>
        </div>    
         
        </main>
            
        <footer>Copyright Volunteer Track</strong></footer>
   
        <script>
// When the user clicks on <div>, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
            </main>
      
        </div>
          </div>
        </body>
</html>
