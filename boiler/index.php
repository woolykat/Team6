<?php 
   include "php/base.php";
   session_start();?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
  <div id="container">
         <header>
            <ul class="titlelist">
               <li> <img src="media/volunteertrack.jpg" class="logo"></li>
               <li>
                  <h1>Volunteer Track</h1>
               </li>
            </ul>
            <div class="nav">
               <ul>
                  <li class="home"><a class="active" href="#">Home</a></li>
                  <li class="news"><a href="#">News</a></li>
                  <li class="profile">
                     <a href="#"><?php echo $_SESSION['login_volunteer']; ?></a>
                     <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Help</a></li>
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
              <div class="main">
            <!---START OF CAMPAGNS---->
            <hr>
            <div class="FeaturedCampaigns">
               <h2>Featured Campaigns </h2>
               <div class="LeftStyle">
                  <img src="media/waterchallenge.png" alt="waterbucketchallenge">
                  <h3>The Ice Bucket Challenge!</h3>
                  <p>When: August 2017</p>
                  <br>
                  <a href="https://www.als.net/icebucketchallenge/">
                  <input type="button" class="button" value="Get Involved"></a>
                  <hr>
                  <img src="media/ColourRun.jpg"alt="Colour run">
                  <h3>The Colour Run!</h3>
                  <p>When: Event Time change throughout the year</p>
                  <a href="http://thecolorrun.co.uk/events/">
                  <input type="button" class="button" value="Get Involved"></a>
                  <br>
                  <p>Dont forget to Donate and tag a friend to complete the challenge too!</p>
                  <hr>
                  <img src="media/marathon.jpg" alt="Marathong Image">
                  <h3>Belfast City Marathon!</h3>
                  <br>
                  <p>When: Event Time change throughout the year</p>
                  <a href="https://register.belfastcitymarathon.com/ps/event/DeepRiverRockBelfastCityMarathon">
                  <input type="button" class="button" value="Get Involved"></a>
                  <br>
                  <p>Dont forget to Donate and tag a friend to complete the marathon with you!</p>
               </div>
            </div>
         </div>
      </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
