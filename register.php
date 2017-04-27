<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="home.css">
      <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><!--new-->
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

    
    <script>
         //UserName validation
            function validateUsername(){
            var hit = 0;
    
            var uv = document.forms["registerForm"]["username"].value;
            if (uv == "") {
                document.getElementById("usernamev").style.display = 'block';
                hit = 1; 
            } else if (uv.length > 30) {
                document.getElementById("usernamev2").style.display = 'block';
                hit = 1;
            } 
            else{
                 document.getElementById("usernamev").style.display = 'none';
                 document.getElementById("usernamev2").style.display = 'none'; 
            }
        }
        
        
        
        
        //Email validation
         function validateEmail(){
                   var hit = 0;
           var ev = document.forms["registerForm"]["email"].value;
    var atpos = ev.indexOf("@");
    var dotpos = ev.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=ev.length) {
         document.getElementById("emailv").style.display = 'block';
        hit = 1;
    }
                else{
                    document.getElementById("emailv").style.display = 'none';
                }

                
            }
        
        
     
        
           //Full Name Validation
            function validateFullName(){
            var hit = 0;
           //Forename validation
            var fn = document.forms["registerForm"]["fullname"].value;
            if (fn == "") {
                document.getElementById("fnv").style.display = 'block';
                hit = 1;
            } 
                else {
                    document.getElementById("fnv").style.display = 'none';
                }
            }
        
        
        
        
            //Password Validation
            function validatePassword(){
            var hit = 0;
           //Forename validation
            var pv = document.forms["registerForm"]["password"].value;
            if (pv == "") {
                document.getElementById("passwordv").style.display = 'block';
                hit = 1;
            } 
                else if (pv.length > 30) {
                document.getElementById("pv2").style.display = 'block';
                hit = 1;
            } 
            else{
                 document.getElementById("passwordv").style.display = 'none';
                 document.getElementById("pv2").style.display = 'none'; 
            }
        }
            
        
        
  
    
    
    
    
      function validateForm() 
        {
          var hit = 0;
            
          //UserName validation
          var uv = document.forms["registerForm"]["username"].value;
          if (uv == "") 
          {
              document.getElementById("usernamev").style.display='block';
              hit=1;
          }
             else if (uv.length > 30) 
             {
                 document.getElementById("usernamev2").style.display='block';
                  hit=1;
             }
            else if (uv.length < 30) 
             {
                 document.getElementById("usernamev").style.display = 'none';
                 document.getElementById("usernamev2").style.display = 'none';
             }
            
            
            
            
        //email validation
      var ev = document.forms["registerForm"]["email"].value;
    var atpos = ev.indexOf("@");
    var dotpos = ev.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=ev.length) {
         document.getElementById("emailv").style.display = 'block';
        hit=1;
    }
             else if (atpos>1 || dotpos>atpos+2 || dotpos+2<ev.length) {
         document.getElementById("emailv").style.display = 'none';
    }
            
            
            
            
            
      //FullName validation
          var fn = document.forms["registerForm"]["fullname"].value;
          if (fn == "") 
          {
              document.getElementById("fnv").style.display = 'block';
              hit=1;  
          }
            
            
        //password validation
          var pv = document.forms["registerForm"]["password"].value;
          if (pv == "") 
          {
              document.getElementById("passwordv").style.display = 'block';
              hit=1;  
          }
            
             else if (pv.length > 30) 
             {
                 document.getElementById("pv2").style.display='block';
                  hit=1;
             }
            else if (pv.length < 30) 
             {
                 document.getElementById("passwordv").style.display = 'none';
                 document.getElementById("pv2").style.display = 'none';
             }
          
            
            if (hit == 1) 
                 {
                     return false;
                 }

            

            
      
    

}
    
        
        
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
    <div id="rightSplitC">
        <div class="charitylog"><a href="charityregister.php">Register as a business</a></div>
        <div class="verticalCenter">
  
      
        
        
        
        
<div id="loginform">
    <div id="hideform">
     <table><tr><td><img src="media/logo.png" width="100px"/></td></tr>
         <tr><td><h3>Create an account</h3></td></tr>
                <form method="post" action="" name="registerForm"  onsubmit="return validateForm();">
                    
                    <tr><td><input type="text" name="fullname" placeholder="Full Name" id="fullname" onchange="validateFullName();"></td></tr>
                     <!--Full Name must not be blank error-->
                        <tr><td><input type="text" id="fnv" name="fnv" value="Full Name must not be blank" style="display: none;" Readonly = "Readonly"/></td></tr>
                            
        
                    <!-------USER NAME-------->
                    <tr><td><input type="text" name="username" placeholder="Username" onchange="validateUsername();"></td></tr>
         
                        <!--Username error blank-->
                        <tr><td><input type="text" id="usernamev" name="usernamev" value="user name must not be blank" style="display: none;" Readonly = "Readonly"/></td></tr>
                            
                    <!--Username error must not be more than 30 letters-->       
                    <tr><td><input type="text" id="usernamev2" name="usernamev2" value="user name must be more than 30 letters" style="display: none;" Readonly = "Readonly"/></td>
                   </tr>
        
                    
                    
                     <!-------EMAIL NAME-------->
        <tr><td><input type="text" name="email" placeholder="Email" onchange="validateEmail();"></td></tr>
                    
                    
                      <!--Email must have @ and .com -->
                        <tr><td><input type="text" id="emailv" name="emailv" value="Email is invalid, remember @ symbol and e.g .com" style="display: none;" Readonly="Readonly"/></td></tr>
                    
                      <!--Email error blank-->
                        <tr><td><input type="text" id="email2" name="emailv2" value="Email must not be blank" style="display: none;" Readonly="Readonly"/></td></tr>
                    
                    
                    
            <!---PASSWORD NAME----->
        <tr><td></p><input type="password" name="password" placeholder="Password" id="password" onchange="validatePassword();"></td></tr>
             
                      <!--password error blank-->
                        <tr><td><input type="text" id="passwordv" name="passwordv" value="Password must not be blank" style="display: none;" Readonly="Readonly"/></td></tr>
                        
                            
                        <!--password password length check-->
                        <tr><td><input type="text" id="pv2" name="passwordv" value="Password must not be over 30 letters or numbers" style="display: none;" Readonly="Readonly"/></td></tr>
        
 
        <tr><td> <input type="submit" name="submit" value="Register" id="hide"></td></tr>
     </table>
            </form>
              <div class="back2home"><a href="home.php">Already have an account? Log In</a></div></div>
       
            
<?php
 if (isset($_POST['submit'])) {  
include "php/base.php";
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$username= addslashes($username);
$password= addslashes($password);


$checkUsername="SELECT username FROM users WHERE username= '".$username."'";
    $checkresult=mysqli_query($conn,$checkUsername);
     if(mysqli_num_rows($checkresult)>0){
         echo "<p style='color:red;'>Username already exists. Please choose another username.</p>";
         
     }
     
   

     
     else {
        
  
$register="INSERT INTO users(username, email, password, name) VALUES('$username', '$email', '$password', '$fullname')";
        mysqli_query($conn, $register) or die ("<br>Invalid Query");


    ?> <script>  $("#hideform").hide(); $(".back2home").hide();</script> <div class='confirmreg'>Account created!<br><button class='register' onclick="window.location.href='home.php'">Log in</button></div> <?php
    
     
 mysqli_close($conn);
     }
 }


?>

   
   
    </div>
            
  
                    
        </div>
                </article>
 </div>
    </body>


</html>