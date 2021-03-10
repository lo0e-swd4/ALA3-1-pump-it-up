<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="language" content="NL">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Lux">
    <meta name="keywords" content=""> 
<title></title>
	<link rel="stylesheet" type="text/css" href="./CSS/HomeStylesheet.css">
	</head>
<body>

<div class="topnav">
  <img class="logo"src="./images/logo.png" height="75px" alt="logo">
  <a href="#Over ons">Over ons</a>
  <a href="#Contact">Contact</a>
  <a href="#Evenementen">Evenementen</a>
  <a href="#producten">producten</a>
  <a href="#home">Home</a>
</div> 

<section class="esport">
<img src="./images/esport3" height="250px" alt="Foto esport">
<img src="./images/esport1" height="250px" alt="Foto esport">
<img src="./images/esport2" height="250px" alt="Foto esport">
</section>

<div class="backk" style="background-image: url('./images/backk.gif');"> 

<p class="Openings">Pump-It-Up is een energie drank van gamers voor gamers</p>



<div class="navbalk"></div>
  <div class="Slides" style="max-width:500px">
  <img class="mySlides" src="./images/doggo.jpg" style="width:100%">
  <img class="mySlides" src="img_ny.jpg" style="width:100%">
  <img class="mySlides" src="img_chicago.jpg" style="width:100%">
</div>



<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); 
}
</script>
</body>
</html>