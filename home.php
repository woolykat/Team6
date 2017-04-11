<?php      
include "php/base.php";
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="home.css">
     <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!--new-->
  <!--smooth scroll-->  <script>
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
        
        

     <link rel="stylesheet" type="text/css" href="css/home.css">

    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>Volunteertrack</title>
    
    
    
    
    
    
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
               
              <p>Volunteer Track helps you get involved in your community, stay involved, and reap rewards from volunteering.Use our online tools to keep track of your volunteer hours and achievements, and share this with potiential employers or include on your CV. Volunteering gets you jobs. Get more out of volunteering with VolunteerTrack</p>
                   <div id="womanTrack"><img src="img/woman.jpg" width="600px" height="400px"/></div>
                 
          
              </div>
         
         
                <div id="opportunitySection"><!--opportunity section-->
                  <h2>Explore Opportunities</h2>
                     <p>Explore exciting new opportunities with volunteer track. Volunteer track allows you to search for new opportunities, in your area or your specific charity.</p>
                        <div id="womanOpportunity"><img src="img/strongWoman.jpg" width="600px" height="400px"/></div>
              
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
            <div class="verticalCenter">

<div id="loginform">
        <table><tr><td><img src="media/logo.png" width="100px"/></td></tr>

            <form action="" method="post" name="">
                
               <tr><td><input type="text" name="username" placeholder="Username" onchange="validateUsername();"></td></tr>
                  
                <tr><td><input type="password" name="password" placeholder="Password" onchange="validatePassword();"></td></tr>
                       
                 <tr><td><input type="submit" name="submit" value="Login" class="gray"></td></tr>
    
  
                
        </form>
    </div>
              <?php


//ONCE THE FORM HAS BEEN SUBMITTED


 if (isset($_POST['submit'])) {   
     


     
     //RETRIEVE ENTERED INFORMATION
     
$username =$_POST['username'];
$password =$_POST['password'];
     
     
     
// IF THEY ARE A VOLUNTEER
    
$query = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
    
    $_SESSION['login_volunteer'] = $username;
    $_SESSION['login'] = true;
    
echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
    
    
   
$query3="SELECT volunteerID FROM users WHERE username = '$username'";

$result3= mysqli_query ($conn, $query3)
or die ('Invalid Query'); 


if (mysqli_num_rows($result3) > 0) {
    while($row3=mysqli_fetch_assoc($result3)) {
        
       $_SESSION['volunteer_ID']=$row3["volunteerID"];
    }
}

}
     


     // check INFO IN CHARITY TABLE

    $query0 = "SELECT * FROM charity_user WHERE username = '$username' AND password ='$password'";

$result0 = mysqli_query($conn,$query0);

if(mysqli_num_rows($result0)==1){
    
     $_SESSION['login_charity'] = $username;
    $_SESSION['login'] = true;
echo '<script>
           window.location = "post.php"
      </script>';

}

else {
   
    echo"<tr><td><p style='color:red;'>Sorry! These details are incorrect</p><td></tr>";

}

 mysqli_close($conn);
 }

?>      
            
              <tr><td> <a href="register.php" >Create an account</a></td></tr>
      </table>        
    </div>
   
</div>
   </article>

    </div>
</div>
    
    </body>





</html>