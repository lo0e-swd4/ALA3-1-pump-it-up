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
  <img class="logo"src="./images/logo.png" height="80px" alt="logo">
  <a href="#Over ons">Over ons</a>
  <a href="#Contact">Contact</a>
  <a href="#Evenementen">Evenementen</a>
  <a href="#producten">producten</a>
  <a href="#home">Home</a>
</div> 

<section class="esport">
  <img src="./images/esport3.jpg" height="200px" alt="Foto esport">
  <img src="./images/esport1.jpg" height="200px" alt="Foto esport">
  <img src="./images/esport2.jpg" height="200px" alt="Foto esport">
</section>

<section class="kort1">
  <img src="./images/event.jpg" height="250px" alt="Foto evenementen">
  <img src="./images/blik.png" height="250px" alt="Foto producten">
</section>

<section class="kort2">
  <img src="./images/contact.png" height="250px" alt="Foto contact">
  <img src="./images/over ons.png" height="250px" width="465px" alt="Foto over ons">
</section>

<div class="backk" style="background-image: url('./images/backk.gif');"> 

<div class="row">
  <div class="column">
    <p>Esport worden er met teams gespeeld, dus winnen doe je samen.</p>
  </div>
  <div class="column">
    <p>Haal de ultimieme gamer uit jezelf tijdens gamen met Pump-it-Up!</p>
  </div>
   <div class="column">
    <p>Samen voor plaats nummer 1! bewijs jezelf met Pump-it-Up!</p>
  </div>
</div>

<p class="Openings">Pump-It-Up is een energie drank van gamers voor gamers</p>

  <div class="Slides" style="max-width:500px">
  <img class="mySlides" src="./images/doggo.jpg" style="width:100%">
  <img class="mySlides" src="./images/soca.jpg" style="width:100%">
  <img class="mySlides" src="img_chicago.jpg" style="width:100%">
</div>

<div class="footer">
  <p>Footer</p>
</div>

<p class="eventtext">Onze energie dranken bevatten de hoogste kwaliteit ingredienten. <a href="#home">Lees hier meer!</a></p>
<p class="producttext">Pump-it-Up organiseert esport events voor jong en oud! <a href="#home">Lees hier meer!</a></p>
<p class="contacttext">Vragen, opmerkingen of hulp nodig? druk <a href="#home">hier</a> om naar ons vragen formulier te gaan!</p>
<p class="overonstext">Wij zijn Pump-it-Up, een jong fris bedrijf vol creative werknemers...  <a href="#home">Lees hier meer!</a> </p>


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