<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="language" content="NL">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Lux">
  <meta name="keywords" content="">
  <title>Pump it up!</title>
  <link rel="stylesheet" type="text/css" href="./CSS/HomeStylesheet.css">
  <link rel="stylesheet" type="text/css" href="./CSS/common.css">
</head>

<body>
  <?php
  include("navbar.php");
  ?>

    <section id="Slides2">
      <div class="Slides" style="max-width:500px">
        <img class="mySlides" src="./images/Slide 1 korting deze week FINAL3.png" style="width:200%">
        <img class="mySlides" src="./images/Slide 2.png" style="width:200%">
      </div>
    </section>

    <section id="Opens">
      <p>Pump-It-Up is een energie drank van gamers voor gamers</p>
    </section>

    <article id="esport">
      <section>
        <img src="./images/esport3.jpg" height="200px" alt="Foto esport">
        <p>Esport worden er met teams gespeeld, dus winnen doe je samen.</p>
      </section> 
     
      <section>
        <img src="./images/esport1.jpg" height="200px" alt="Foto esport">
        <p>Haal de ultimieme gamer uit jezelf tijdens gamen met Pump-it-Up!</p>
      </section>
        
      <section>
        <img src="./images/esport2.jpg" height="200px" alt="Foto esport">
        <p>Samen voor plaats nummer 1! bewijs jezelf met Pump-it-Up!</p>
      </section>
    </article>

    <article id="kort1">
      <section>
        <img src="./images/event.jpg" height="250px" alt="Foto evenementen">
        <p>Pump-it-Up organiseert esport events voor jong en oud! <a href="#home">Lees hier meer!</a></p>
      </section>
      <section>
        <img src="./images/blik.png" height="250px" alt="Foto producten">
        <p>Onze energie dranken bevatten de hoogste kwaliteit ingredienten. <a href="#home">Lees hier meer!</a></p>
      </section>
    </article>

    <article id="kort2">
      <section>
        <img src="./images/contact.png" height="250px" alt="Foto contact">
        <p>Vragen, opmerkingen of hulp nodig? druk <a href="#home">hier</a> om naar ons vragen formulier te gaan!</p>
      </section>
      <section>
        <img src="./images/over ons.png" height="250px" width="465px" alt="Foto over ons">
        <p>Wij zijn Pump-it-Up, een jong fris bedrijf vol creative werknemers... <a href="#home">Lees hier meer!</a> </p>
      </section>
    </article>

    <div class="backk" style="background-image: url('./images/backk.gif');">

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
          if (myIndex > x.length) {
            myIndex = 1
          }
          x[myIndex - 1].style.display = "block";
          setTimeout(carousel, 5000);
        }
      </script>
      <article class="opacity"></article>
      <?php
  include("footer.php");
  ?>
</body>

</html>