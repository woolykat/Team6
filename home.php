<html>
    <head>
    
     <link rel="stylesheet" type="text/css" href="css/home.css">

    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>Volunteertrack</title>
    
    
    
    
    
    
    </head>
<body>
        <div id="container">
            <article>
     <div id="leftSplit">
      <!------ CONTENT HERE ----->
        </div>
</article>
<article>
        <div id="rightSplit">
            <div class="verticalCenter">
<h3> Log In As A Volunteer </h3>

            <form action="" method="post">
                
                            <input type="text" name="username" placeholder="Username">
                     
                            <input type="text" name="password" placeholder="Password">
                       
                   
                              <label class="volunteer"><input type="radio" name="toggle" value="volunteer" checked="checked"><span>I'm a Volunteer</span></label>
                         <label class="charity"><input type="radio" name="toggle" value="charity"><span>I'm a Charity</span></label>
                    
                        
                    
                    
                   
                      
                            <br> <input type="submit" name="submit" value="Login">
                       
                                <br/>
                                <button class="register" type="button" onclick="location.href='register.php';" value="Register">Register</button>
                            
                    
               
        </form>
              <?php
 if (isset($_POST['submit'])) {   
   
include "php/base.php";

$username =$_POST['username'];
$password =$_POST['password'];
     $toggle =$_POST['toggle'];

if ($toggle=="volunteer"){
    
$query = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
echo '<script type="text/javascript">
           window.location = "https://scm.ulster.ac.uk/~Team6/index.php"
      </script>';


}

else{
   
    echo"Sorry! These details are incorrect";

}
}
     
else {
    $query = "SELECT * FROM charity_user WHERE username = '$username' AND password ='$password'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
echo '<script type="text/javascript">
           window.location = "https://scm.ulster.ac.uk/~Team6/post1.php"
      </script>';


}

else{
   
    echo"Sorry! These details are incorrect";

}
}

 mysqli_close($conn);
 }

?>      
              
    </div>
   
</div>
   </article>

    </div>

    
    </body>





</html>