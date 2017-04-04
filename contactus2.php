<?php session_start();?>
<html>


<head>
     <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/contactus.css">
    <title>Contact Us</title>
    
    </head>
<div id="container">

    <header>
       
            <div class="nav">
                   <ul class="titlelist">
               <li> <img src="media/logo.png" class="logo"><span class="logotitle">Volunteer Track</span></li>
           
              
            </ul>
                
               <ul id="rightside">
  <li><a class="active" href="post.php">Post an opportunity</a></li>
  
  <li>
<a href="#"><?php echo $_SESSION['login_charity']; ?></a>
                   <ul>
      
      <li><a href="contactus2.php">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      </ul>
                   
                   
                   </li>
  
</ul>
            </div>
    
    </header>
    
    



<body>
    
 
        
    
    <h2>Any Questions or queries</h2>
    <p>If you would like to find out more on volunteer track or if you have any questions for us feel free to contact us with the form below.</p>
    
    
    
    
    <table>
<form name="Contact form" method="post" action="">
    
</tr>
<tr>
 <td>
  <label for="first_name">First Name <span class="star">*</label>
 </td>
    
 <td>
  <input  type="text" name="first_name" maxlength="50" size="30"><br><br>
 </td>
    
</tr>
 
<tr>
 <td>
  <label for="last_name">Last Name <span class="star">*</label>
 </td>
    
 <td>
  <input  type="text" name="last_name" maxlength="50" size="30"><br><br>
 </td>
</tr>
        
<tr>
 <td>  <label for="email">Email Address <span class="star">*</span></label>
 </td>
 <td>
  <input  type="text" name="email" maxlength="80" size="30"><br><br>
 </td>
 
</tr>
<tr>
<td>
  <label for="telephone">Telephone Number<span class="star">*</label>
 </td>
 <td>
  <input  type="text" name="telephone" maxlength="30" size="30"><br><br>
 </td>
    
</tr>
<tr>
 <td>
  <label for="comments">Comments <span class="star">*</label>
 </td>
    
 <td>
     
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea><br><br>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">  
 </td>
</tr>
</table>
    <?php
if(isset($_POST['email'])) {
     
    
    $email_to = "Volunteertrack@outlook.com";
     
    $email_subject = "contact form";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there was a problem found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
    
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid. You may have forgot an @ sign<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.Please enter your first name<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.Please enter your last name<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.Please enter your question here<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
    
    
}

?>
</form>
    
     <div id="map">
    <script>
      function initMap() {
        var uluru = {lat: 54.687254, lng: -5.882736};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
            
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZaXZapA5Ik_ePNNy47rVxv7A6IoVBZHw&callback=initMap">
    </script>
    
    
    </div>


 
<!-- place your own success html below -->


    <br>
    </div>
   <br>

   
    
    </body>
</html>

   
