<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Daan Berg">
    <meta name="keywords" content="">
    <title>Producten | Pump It Up</title>
    <link rel="stylesheet" type="text/css" href="CSS/producten.css">  
    <link rel="stylesheet" type="text/css" href="CSS/common.css">  
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <main>
        <section id="banner">
        <img src="images/wocky_slus-removebg-preview.png" alt="blikjes">
        </section>
        <section id="aanbieding">
            <h1 class="tekst">Huidige aanbiedingen:<br></h1>
            <p><?php
             $host = "localhost";
             $user = "root";
             $pass = "";
             $database = "energy";
         
             $conn = new mysqli($host, $user, $pass, $database); 
                    $sql = "SELECT titel, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(begindatum, '%d-%m-%Y') AS einddatum, omschrijving
                    FROM aanbiedingen
                    WHERE  begindatum< NOW()
                    AND einddatum > NOW()";
                    
                    $result = $conn->query($sql); 
                    
                    if($result){
                        while ($row = $result->fetch_object()){
                        echo$row->titel."  |  "." Begint op: ".$row->begindatum."  |  "." Eindigt op: ".$row->einddatum."  |  ".$row->omschrijving."<br>";
                    }
                    
            ?></p>
            <h1>Komende aanbiedingen:</h1>
            <p><?php
                    $conn = new mysqli($host, $user, $pass, $database); 
                     $sql = "SELECT titel, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(begindatum, '%d-%m-%Y') AS einddatum, omschrijving
                     FROM aanbiedingen
                     WHERE  begindatum > NOW()
                     AND einddatum > NOW()
                     limit 3";
                        $result = $conn->query($sql); 
                    
                    if($result){
                        while ($row = $result->fetch_object()){
                        echo$row->titel."  |  "." Begint op: ".$row->begindatum."  |  "." Eindigt op: ".$row->einddatum."  |  ".$row->omschrijving."<br>";
                    }
                    

                    $result->close();
                    $conn->close();
                    }
                }
            ?>
        </section>
        <section id="original">
            <!-- Original -->
            <img src="images/original.png" alt="Original blikje">
            <div>
                <h1 class="titel">Original</h1>
                <p class="container">
               Ingrediënten: <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour</p>
            </div>
            <img src="images/voedingswaarden.png" alt="tabel voedingswaardes" class="Foto1">
        </section>
        <section id="blueberry">
            <!-- blueberry -->
            <img src="images/blueberry.png" alt="Blueberry blikje">
            <div>
                <h1 class="titel">Blauwe Bes</h1>
                <p class="container">Ingrediënten: <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour, blueberry flavour</p>
            </div>
            <img src="images/voedingswaarden.png" alt="tabel voedingswaardes" class="Foto1">
        </section>
        <section id="citroen">
            <!-- Citroen -->
            <img src="images/citroen.png" alt="citroen blikje">
            <div>
                <h1 class="titel">Citroen</h1>
                <p class="container">Ingrediënten:<br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour, lemon flavour</p>
            </div>
               <img src="images/voedingswaarden.png" alt="tabel voedingswaardes" class="Foto1">
        </section>
        <section id="aardbei">
            <!-- Aardbei -->
            <img src="images/aardbei.png" alt="aardbei blikje">
            <div>
                <h1 class="titel">Aardbei</h1>
                <p class="container">Ingrediënten: <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour, strawberry flavour</p>
            </div>
               <img src="images/voedingswaarden.png" alt="tabel voedingswaardes" class="Foto1">
        </section>
    </main>
    <article class="opacity"></article>
    <?php
        include("footer.php");
    ?>
</body>
</html>