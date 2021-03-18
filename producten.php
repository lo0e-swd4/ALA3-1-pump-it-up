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
    <header id="nav-bar">
        <nav>
            <img src="images/logo.png" alt="Logo">
        <section id="navbar">
            <ul>
                <li><a href="./HOMEPHP.php">Home</a></li>
                <li><a href="./producten.php">Producten</a></li>
                <li><a href="#">Evenementen</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="#">Over Ons</a></li>
            </ul>
            </section>
            <section id="navbar-small">
            <details>
                <summary>
                    <h1>☰</h1>
                </summary>
                <nav id="item-nav">
                    <ul>
                        <li><a href="./HOMEPHP.php">Home</a></li>
                        <li><a href="./producten.php">Producten</a></li>
                        <li><a href="#">Evenementen</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="#">Over Ons</a></li>
                    </ul>
                    </nav>
            </details>
            </section>
        </nav>
    </header>
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
                    $sql = "SELECT * FROM aanbiedingen
                    WHERE begindatum < NOW()
                    AND einddatum > NOW()";
                    $result = $conn->query($sql); 
                    
                    if($result){
                        while ($row = $result->fetch_object()){
                        echo$row->titel." "." Eindigt op: ".$row->einddatum." ".$row->omschrijving."<br>";
                    }
                    
            ?></p>
            <h1>Komende aanbiedingen:</h1>
            <p><?php
                    $conn = new mysqli($host, $user, $pass, $database); 
                     $sql = "SELECT * FROM aanbiedingen
                        WHERE begindatum > NOW()
                        LIMIT 3";
                        $result = $conn->query($sql); 
                    
                    if($result){
                        while ($row = $result->fetch_object()){
                        echo$row->titel."  |  "." Begint op: ".$row->begindatum."  |  ".$row->omschrijving."<br>";
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
            <h1 class="titel">Original</h1>
            <p class="container">
               Ingrediënten: <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour</p>
            <img src="images/voedingswaarden.png" alt="tabel voedingswaardes" class="Foto1">
        </section>
        <section id="blueberry">
            <!-- blueberry -->
            <img src="images/blueberry.png" alt="Blueberry blikje">
            <h1 class="titel">Blauwe Bes</h1>
            <p class="container">Ingrediënten: <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour, blueberry flavour</p>
            <img src="images/voedingswaarden.png" alt="tabel voedingswaardes" >
        </section>
        <section id="citroen">
            <!-- Citroen -->
            <img src="images/citroen.png" alt="citroen blikje">
            <h1 class="titel">Citroen</h1>
            <p class="container"> <strong>Ingrediënten:</strong> <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour, lemon flavour</p>
               <img src="images/voedingswaarden.png" alt="tabel voedingswaardes">
        </section>
        <section id="aardbei">
            <!-- Aardbei -->
            <img src="images/aardbei.png" alt="aardbei blikje">
            <h1 class="titel">Aardbei</h1>
            <p class="container">Ingrediënten: <br> Carbonated water, glucose-fructose, citric acid, taurine, 
               sodium bicarbonate, magnesium carbonate, caffeine, niacin, panthothenate, vitamin B6, 
               vitamin B12, artificial flavour, strawberry flavour</p>
               <img src="images/voedingswaarden.png" alt="tabel voedingswaardes">
        </section>
    </main>
    <article class="opacity"></article>
    <footer></footer>
</body>
</html>