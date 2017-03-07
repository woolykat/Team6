<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="home.css">
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
      
         
    <title>Volunteertrack</title>
    </head>
<body>
        <div id="container">
            <article>
     <div id="leftSplit">
         <div id="container">
          <header> <!--header CLASS change to id-->
                  <h1>Volunteer Track</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
       <div class="arrow"> <a href="#trackSection"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a> </div>
            
              </header>
            
              <div id="trackSection"><!--track section-->
                  <h2>Track you progress</h2>
              <p>Track your progress     Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                   <div id="womanTrack"><img src="img/woman.jpg" width="600px" height="400px"/></div>
                 
            <div class="arrow"> <a href="#opportunitySection"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a> </div>
              </div>
         
         
                <div id="opportunitySection"><!--opportunity section-->
                  <h2>Explore Opportunities</h2>
                     <p>Explore exciting new opportunities    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut.</p>
                        <div id="womanOpportunity"><img src="img/strongWoman.jpg" width="600px" height="400px"/></div>
                        <div class="arrow"> <a href="#rewardSection"> <i class="fa fa-arrow-down" aria-hidden="true"></i></a> </div>
                </div>  
         
         
                <div id="rewardSection"><!--reward section-->
                  <h2>Gain Rewards</h2>
                     <p>Gain rewards when you log the amount of hours you have volunteered.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                     <div id="rewardIcons"><img src="img/medal(Gold).png"/><img src="img/medal(silver).png"/><img src="img/medal(bronze).png"/></div>    
                  <div class="arrow"> <a href="#"> <i class="fa fa-arrow-up" aria-hidden="true"></i></a> </div>
                </div>  
                    
                    
            </div>
        </div>
</article>

    
    </div>
    <article>
        <div id="rightSplit">
            <div class="verticalCenter">
<h3> I am a Volunteer </h3>
<button id="volunteerLogIn" name="volunteerLogIn">Log In</button>
<button id="volunteerRegister" name="volunteerRegister">Register</button>
                <h3> I am a Charity </h3>
                <button id="charityLogIn" name="charityLogIn">Log In</button>
<button id="charityRegister" name="charityRegister">Register</button>
    </div>
   
</div>
   </article>

    </div>
    

    </body>





</html>