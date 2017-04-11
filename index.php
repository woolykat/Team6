<?php session_start();
   include "php/base.php";
   
   if(!$_SESSION['login']){
   header("location:home.php");
   die;
   }
   ?>
<html>
   <head>
      <title>Volunteer Track Homepage</title>
      <link rel="stylesheet" type="text/css" href="css/base.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link href="css/Hover-master/css/hover.css" rel="stylesheet" media="all">
      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta charset="UTF-8">
      <meta name="description" content="Home page">
      <meta name="keywords" content="HTML,CSS,XML,JavaScript">
      <meta name="author" content="Volunteer Track">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script>function validateForm() {
         var x = document.forms["searchform"]["search"].value;
         if (x == "") {
            
             return false;
         }
         }
      </script>
      <script>
         function myFunction() {
             var x = document.getElementById("MyNav");
             if (x.className === "nav") {
                 x.className += "responsive";
             } else {
                 x.className = "nav";
             }
         }
      </script>
   </head>
   <body>
      <div id="container">
      <header>
         <div class="nav" id="MyNav">
            <ul class="titlelist">
               <li> <img src="media/logo.png" class="logo"><span class="logotitle">Volunteer Track</span></li>
            </ul>
            <ul id="rightside">
               <li><a class="active" href="index.php">Home</a></li>
               <li>
                  <a href="V.Profile.php"><?php echo $_SESSION['login_volunteer']; ?></a>
                  <ul>
                     <li><a href="V.Profile.php">Profile</a></li>
                     <li><a href="contactus.php">Contact Us</a></li>
                     <li><a href="logout.php">Logout</a></li>
                     </u       
                     </li>
                  </ul>
                  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </ul>
         </div>
         <!--
            -->
      </header>
      <!--
         -->
      <div class="searchBackground">
         <h2>Search For Opportunities </h2>
         <div class="search">
            <form action="" method="post" onsubmit="return validateForm()" name="searchform">
               <input type="text" name="search" placeholder="Enter a location, town, or keyword e.g. animals"/>
               <input type="submit" name="submit" value="Search"/>
            </form>
         </div>
         <div class="searchresults">
            <?php
               if (isset($_POST['search'])) {   
               
               $search=$_POST['search'];
               
               $query="SELECT * FROM opportunity WHERE keywords LIKE '%".$search."%'";
               
               $result= mysqli_query ($conn, $query)
               or die ('Invalid Query'); 
               
               
               if (mysqli_num_rows($result) > 0) {
                  while($row=mysqli_fetch_assoc($result)) {
                      
                     
                    //  echo "opportunity name: " . $row["opportunity_name"]. "<br/>";
                       ?>
            <a href="./opportunity.php?data=<?php echo $row["opportunityID"]; ?>"><?php echo $row["opportunity_name"]; ?></a><br /><span>
            <?php echo $row["location"]; echo "</span><br/>";
               }
               
               }
               
               
               else {
               echo "0 results";
               }
                
               
               mysqli_close ($conn);
                }
               
               ?>  
         </div>
      </div>
      <!---START OF CAMPAGNS---->
      <div id="FeaturedCampaigns">
         <div class="main">
            <div id="myWork" class="animatedParent">
               <h2>Featured Campaigns</h2>
               <div class="centeredGallery">
                  <ul class="galleryImages">
                     <?php
                        include "php/base.php";
                        $todaysdate=date("Ymd");
                        $sql = "SELECT featured_image,featured_name,website FROM featuredcamps WHERE start_date<= ".$todaysdate." AND expiry_date>".$todaysdate."";
                        $sth = $conn->query($sql);
                        
                          while($result=mysqli_fetch_array($sth)) { ?>
                     <li>
                        <a href="<?php echo $result['website'];?>">
                           <div class="Ice">
                              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['featured_image'] ).'"class="gallery"/>'; ?>
                              <div class="caption"><?php echo $result['featured_name'];?> </div>
                           </div>
                        </a>
                     </li>
                     <?php } ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!---START OF About us---->
      <div class="main">
         <div id="About Us">
            <h2>About Us</h2>
            <br>
            <h2>What is Volunteer Track?</h2>
            <p>Volunteer Track is a website designed to help you keep track of your hours and to keep volunteering fun! This is done by giving you your own profile to update and display! Giving you a range of volunteer opportunities within your area and also allowing you to see the most popular ones at the moment!</p>
            <p>Within volunteer track you can also showcase your achievements to other charities that you may be considering to volunteer for. Build up your CV with great appraisals for your future employer and even build your skills and knowledge in particular fields. </p>
         </div>
         <div id="didYouKnow">
            <h2>Did you know?</h2>
            <p>19.8 million people regularly volunteer in the UK.</p>
            <p>There are also 190 thousand charities with the UK alone.</p>
            <p>80&#37; of workers say they want to volunteer.</p>
         </div>
      </div>
   </body>
</html>
