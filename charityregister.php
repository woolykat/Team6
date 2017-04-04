<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="home.css">
      <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><!--new-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!--new-->
  <!--new-->  <script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script>
  $(document).ready(function(){
    $("#hide").click(function(){
        $(".back2home").hide();
    });
});
    
    
    </script>

<link rel="stylesheet" type="text/css" href="css/home.css">
<title>Registration</title>
    </head>
<body>
    <div id="container">
                  <article>
     <div id="leftSplit">
 
        
        <div id="topHeaderImage">
          <header> <!--header CLASS change to id-->
                  <h1><span>V</span>olunteer<br>Track</h1>
            
              </header>
                </div>
          
            
              <div id="trackSection"><!--track section-->
                  <h2>Track your progress</h2>
              <p>Use our online tools to keep track of your volunteer hours and achievements, and share this with potiential employers or include on your CV. Volunteering gets you jobs. Get more out of volunteering with VolunteerTrack</p>
                   <div id="womanTrack"><img src="img/woman.jpg" width="600px" height="400px"/></div>
                 
            <div class="arrow"> <a href="#opportunitySection"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a> </div>
              </div>
         
         
                <div id="opportunitySection"><!--opportunity section-->
                  <h2>Explore Opportunities</h2>
                     <p>Explore exciting new opportunities with volunteer track. Volunteer track allows you to search for new opportunities, in your area or your specific charity.</p>
                        <div id="womanOpportunity"><img src="img/strongWoman.jpg" width="600px" height="400px"/></div>
                        <div class="arrow"> <a href="#rewardSection"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a> </div>
                </div>  
         
         
                <div id="rewardSection"><!--reward section-->
                  <h2>Gain Rewards</h2><p>Gain rewards as you track the amount of hours you have volunteered. You can recieve different awards depending on the amount of hours you have volunteered. For example to achieve the bronze award you need to complete 50 hours of volunteering.</p>
                     <div id="rewardIcons"><img src="img/medal(Gold).png"/><img src="img/medal(silver).png"/><img src="img/medal(bronze).png"/></div>    
                  <div class="arrow"> <a href="#"> <i class="fa fa-arrow-up" aria-hidden="true"></i></a> </div>
                </div>  
        </div>
</article>
                <article>
    <div id="rightSplit">
        <div class="charitylog"><a href="register.php">Not a business? Register as a volunteer</a></div>
        <div class="verticalCenter">
    <div class="header">
        
<div id="loginform">
     <table><tr><td><img src="media/logo.png" width="100px"/></td></tr>
         <tr><td><h3>Create a Business account</h3></td></tr>
    
    <form method="post" action="" name="registerForm" >
        <tr><td><p id="error"> </p><input type="text" name="charname" placeholder="Business/Charity Name" id="fullname"></td></tr>
        <tr><td><p id="error"> </p><input type="text" name="regno" placeholder="Charity Registration Number" id="regno"></td></tr>
        <tr><td> <p id="error1"> </p><input type="text" name="username" placeholder="Username"></td></tr>
        <tr><td><p id="error2"> </p><input type="text" name="email" placeholder="Email"></td></tr>
        <tr><td><p id="error3"> </p><input type="password" name="password" placeholder="Password" id="password"></td></tr>
             
                    
                        
        
 
        <tr><td> <input type="submit" name="submit" value="Register"  onclick="checkLength()" id="hide"></td></tr>
     </table>
            </form>
       
            
<?php
 if (isset($_POST['submit'])) {  
include "php/base.php";
$charname = $_POST['charname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$regno = $_POST['regno'];
     


  
$register="INSERT INTO charity_user(username, email, password, charity_name, charity_reg) VALUES('$username', '$email', '$password', '$charname', '$regno')";
        mysqli_query($conn, $register) or die ("<br>Invalid Query");


    ?>  <div class='confirmreg'>Account created!<br><button class='register' onclick="window.location.href='home.php'">Log in</button></div> <?php
    
     
 mysqli_close($conn);
     }
 


?>

     <div class="back2home"><a href="home.php">Already have an account? Log In</a></div>
   
    </div>
            
        </div>
                    
        </div>
                </article>
 </div>
    </body>


</html>