<?php 
   include "php/base.php";
   session_start();?>
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
   </head>
   <body>
      <div id="container">
         <header>
       
            <div class="nav">
                   <ul class="titlelist">
               <li> <img src="media/logo.png" class="logo"><span class="logotitle">Volunteer Track</span></li>
           
              
            </ul>
                
               <ul id="rightside">
  <li><a class="active" href="index.php">Home</a></li>
  
  <li>
<a href="#"><?php echo $_SESSION['login_volunteer']; ?></a>
                   <ul>
      <li><a href="V.Profile.php">Profile</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      </ul>
                   
                   
                   </li>
  
</ul>
            </div><!--
         --></header><!--
         -->
          
          
          <div class="searchBackground">
            <h2>Search For Opportunities </h2>
            <div class="search">
               <form action="" method="post" onsubmit="return validateForm()" name="searchform">
                  <input type="text" name="search"/>
                   
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
                   <li>
                     <a href="https://www.als.net/icebucketchallenge/?gclid=CMzxt9mr-dICFeQy0wodofIGTQ" title="Lettering Instagram">
                      <div class="Ice">  
                           <img src="images/ice.jpg" alt="Ice Bucket Challenge" class="gallery"/>
                               <div class="caption">The Ice Bucket Challenge </div>
                      </div>
                     </a>
                    </li>
                    <li>
                     <a href="http://thecolorrun.co.uk/" title="The colour run">
                      <div class="Colour">
                            <img src="images/colourfeature.jpg" class="gallery"/>
                               <div class="caption">The Colour Run</div>
                      </div>
                     </a>
                    </li>
                    <br/>
                    <li>
                     <a href="http://www.cancerfundforchildren.com/event/belfast-city-marathon-2017/?gclid=CJ6liMmr-dICFUVmGwodWoIHQw" title="Marathon">
                      <div class="marathon">
                            <img src="images/marathon.jpg" class="gallery"/>
                                <div class="caption">The Belfast Marathon</div>
                      </div>
                     </a>
                    </li>
                    <li>
                     <a href="http://www.cancerresearchuk.org/support-us/find-an-event/bark-for-life-2017" title="Bark for life">
                      <div class="bark">
                            <img src="images/dogs.jpg" class="gallery"/>
                                 <div class="caption">Bark for Life</div>
                      </div>
                     </a>
                    </li>
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