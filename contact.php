<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="language" content="NL">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="M. Hamidi">
  <meta name="keywords" content="">
  <title>Pump it up!</title>
  <link rel="stylesheet" type="text/css" href="CSS/contact.css">
  <link rel="stylesheet" type="text/css" href="CSS/common.css"> 
</head>

<?php
  include("navbar.php");
  ?>

<section id="Slides2">
      <div class="Slides" style="max-width:200px">
        <img class="mySlides" src="images/slideshow 1.png" style="width:100%">
        <img class="mySlides" src="images/slideshow 2.png" style="width:100%">
        
      </div>
    </section>
<body>
   
    <div class="container">
    <h1>Contact formulier:</h1>
    <p>
    Ik heb een: 
    <input type="radio">Vraag  <input type="radio">Opmerking
  <form action="action_page.php">

    
    <input type="text" id="fname" alt="voor naam" placeholder="*naam..">

    <input type="text" id="lname" alt="Email" placeholder="*email..">

    <input type="text" id="lname" alt="Onderwerp" placeholder="*onderwerp..">

    <textarea id="subject" alt="bericht" placeholder="*Bericht.." style="height:200px"></textarea>

    <input type="submit" value="Send">
    

  </form>
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
          if (myIndex > x.length) {
            myIndex = 1
          }
          x[myIndex - 1].style.display = "block";
          setTimeout(carousel, 5000);
        }
      </script>

      <footer></footer>

    
</body>
</html>