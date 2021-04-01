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
<body>

<?php
  include("navbar.php");
  ?>


    <main id="contact-page">
   
      <div class="container">
          <h1>Contact formulier:</h1>
          <p>
            Ik heb een: 
            <input type="radio">Vraag  
            <input type="radio">Opmerking
          </p>
        <form action="action_page.php">

      
          <input type="text" id="fname" alt="voor naam" placeholder="*naam..">

          <input type="text" id="lname" alt="Email" placeholder="*email..">

          <input type="text" id="lname" alt="Onderwerp" placeholder="*onderwerp..">

          <textarea id="subject" alt="bericht" placeholder="*Bericht.." style="height:200px"></textarea>

          <input type="submit" value="Send">
      

        </form>
      </div> 



      <section id="faq">

        <article class="mySlides">
          <h3>Meest gestelde vragen:</h3>
          <p>komen er regelmatig aanbiedingen?<br>ja, we hebben elke maand nieuwe aanbiedingen! vergeet niet de code van onze content creators te gebruiken voor 10% korting!<br><br>
          komen er ook eventen met corona?<br>
          Er zijn nog geen gaming evenementen beschikbaar waarbij je je kan opgeven om mee te doen!!</p>
          
          
        </article>

        <article class="mySlides">

          <h3>Meest gestelde vragen:</h3>
          <p>waardoor zijn jullie drankjes gezond?<br>
          In onze drankjes zitten geen ingrediënten wat je lichaam beschadigd!
          Onze wetenschappers hebbenn vervangende ingrediënten toegevoegd!<br> <br>
          zijn jullie drankjes geschikt voor kinderen?<br>
          ja, in onze dranken zitten geen ingrediënten wat je lichaam beschadigd. </p>

        </article>
      </section>
  </main>



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

      <?php
      include("footer.php");
      ?>

    
</body>
</html>