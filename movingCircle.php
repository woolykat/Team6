<?php 
   include "php/base.php";
   session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<style>
/* Load animation */

@-webkit-keyframes 
load { 0% {
stroke-dashoffset:0
}
}
@-moz-keyframes 
load { 0% {
stroke-dashoffset:0
}
}
@keyframes 
load { 0% {
stroke-dashoffset:0
}
}

/* Container */
.progress {
  position: relative;
  display: inline-block;
  padding: 0;
  text-align: center;
}

/* Item */
.progress>li {
  display: inline-block;
  position: relative;
  text-align: center;
  color: #93A2AC;
  font-family: Lato;
  font-weight: 100;
  margin: 2rem;
}

.progress>li:before {
  content: attr(data-name);
  position: absolute;
  width: 100%;
  bottom: -2rem;
  font-weight: 400;
      color:#000;
    font-family: 'Oswald', sans-serif;

}

.progress>li:after {
  content: attr(data-percent);
  position: absolute;
  width: 100%;
  top: 3.7rem;
  left: 0;
  font-size: 2rem;
  text-align: center;
  color:#000;
    font-family: 'Oswald', sans-serif;

}

.progress svg {
  width: 10rem;
  height: 10rem;
}

.progress svg:nth-child(2) {
  position: absolute;
  left: 0;
  top: 0;
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
}

.progress svg:nth-child(2) path {
  fill: none;
  stroke-width: 25;
  stroke-dasharray: 629;
  stroke: rgba(255, 255, 255, 0.9);
  -webkit-animation: load 1s;
  -moz-animation: load 1s;
  -o-animation: load 1s;
  animation: load 1s;
}
    
    
    
    
    
    #myform {
    text-align: center;
    padding: 5px;
    border: 1px dotted #ccc;
    margin: 2%;
}
.qty {
    width: 40px;
    height: 25px;
    text-align: center;
}
input.qtyplus { width:25px; height:25px;}
input.qtyminus { width:25px; height:25px;}
    
    
    
    
    
</style>
    <script type="text/javascript"></script>

   
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 

</head>

<body>

  <div class="css-script-center"> 
<!--<script type="text/javascript"src="//pagead2.googlesyndication.com/pagead/show_ads.js">-->
</div>



<h1 style="margin-top:50px;" align="center">Tracking Volunteering Hours</h1>
<!--  Container  -->
<ul class="progress">
  <!--  Item  CSS skill-->
<li data-name="<?php echo $_SESSION['login_volunteer']; ?>" data-percent="<?php echo $_SESSION['login_volunteer']; ?>"> 
<svg viewBox="-10 -10 220 220">
    <g fill="none" stroke-width="14" transform="translate(100,100)">
      <path d="M 0,-100 A 100,100 0 0,1 86.6,-50" stroke="url(#cl1)"/>
      <path d="M 86.6,-50 A 100,100 0 0,1 86.6,50" stroke="url(#cl2)"/>
      <path d="M 86.6,50 A 100,100 0 0,1 0,100" stroke="url(#cl3)"/>
      <path d="M 0,100 A 100,100 0 0,1 -86.6,50" stroke="url(#cl4)"/>
      <path d="M -86.6,50 A 100,100 0 0,1 -86.6,-50" stroke="url(#cl5)"/>
      <path d="M -86.6,-50 A 100,100 0 0,1 0,-100" stroke="url(#cl6)"/>
    </g>
    </svg> <svg viewBox="-10 -10 220 220">
    <path d="M200,100 C200,44.771525 155.228475,0 100,0 C44.771525,0 0,44.771525 0,100 C0,155.228475 44.771525,200 100,200 C155.228475,200 200,155.228475 200,100 Z" stroke-dashoffset="629"></path>
    </svg> </li>
</ul>
    

<!--  Defining Angle Gradient Colors  --> 
<svg width="0" height="0">
<defs>
  <linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl3" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl4" gradientUnits="objectBoundingBox" x1="1" y1="1" x2="0" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl5" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="0" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
  <linearGradient id="cl6" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="1" y2="0">
    <stop stop-color="#DA1B3A"/>
    <stop offset="100%" stop-color="#DA1B3A"/>
  </linearGradient>
</defs>
</svg>
    
    

    

    

</body>
</html>
