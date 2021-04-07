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

    <link rel="stylesheet" type="text/css" href="CSS/evenementen.css">  

</head>
<body>
    <?php
        include('navbar.php');

        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'energy';

        $conn = new mysqli($server,$user,$pass,$db);

        if($conn->connect_error) {
            die('Kon geen verbinding maken met de database');
        }
    ?>

    <main>
        <section id="about-events">
            <h1>Over Evenementen
            </h1>
                <p>lorem ipsum is simply dummy text of the printing and typesetting 
                    industry. lorem ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley of 
                    type and scrambled it to make a type specimen book. it has 
                    survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemaker including versions of lorem ipsum
            </p>

        </section>

        <article class="artiesten">
        <h1>Artiesten</h1>
            <article class="container">
                <section class="box-item item-1">
                    <img src="images/MileyCyrus.jpg">
                    <?php

                        $id = 104;

                        $locatie_id = 0;
                        $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                        JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                        JOIN locaties ON evenementen.locatie_id = locaties.locatie_id';
                        if($result = $conn->query($sql)) {
                            $row = $result->fetch_object();
                            echo '<h2>'.$row->naam.'</h2>';
                            echo '<p>'.$row->statement.'</p>';
                            echo '<p>'.$row->datum.'</p>';
                            $locatie_id = $row->locatie_id;
                            $row = $result->fetch_object();
                            echo '<p>'.$row->plaatsnaam.' in '.$row->gebouw.'</p>';
                        }

                        
                    ?>
                </section>
                <section class="box-item item-2">
                    <img src="images/ElvisPresley.jpg">
                    <?php

                        $id = 101;
                        
                        $locatie_id = 0;
                        $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                        JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                        JOIN locaties ON evenementen.locatie_id = locaties.locatie_id';
                        if($result = $conn->query($sql)) {
                            $row = $result->fetch_object();
                            echo '<h2>'.$row->naam.'</h2>';
                            echo '<p>'.$row->statement.'</p>';
                            echo '<p>'.$row->datum.'</p>';
                            $locatie_id = $row->locatie_id;
                            $row = $result->fetch_object();
                            echo '<p>'.$row->plaatsnaam.' in '.$row->gebouw.'</p>';
                        }
                    ?>
                    
                </section>
                <section class="box-item item-2">
                    <img src="images/RapperSjors.jpg">
                    <?php

                        $id = 105;
                        
                        $locatie_id = 0;
                        $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                        JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                        JOIN locaties ON evenementen.locatie_id = locaties.locatie_id';
                        if($result = $conn->query($sql)) {
                            $row = $result->fetch_object();
                            echo '<h2>'.$row->naam.'</h2>';
                            echo '<p>'.$row->statement.'</p>';
                            echo '<p>'.$row->datum.'</p>';
                            $locatie_id = $row->locatie_id;
                            $row = $result->fetch_object();
                            echo '<p>'.$row->plaatsnaam.' in '.$row->gebouw.'</p>';
                        }
                        
                    ?>
                </section>
                
            </article>
            <article class="item-button">
                <a href="artiesten.php">Bekijk alle artiesten</a>
            </article>
        </article>
        <article class="evenementen">
            <h1>Evenementen</h1>
            </article class="container-event">
                <article class="event-item event-1">
                    <div class="event-img-1">
                        <img src="images/gaming.jpg" alt="Gaming plaatje" width="400">
                    </div>
                    <div class="event-text-1">
                        <h2>Game wedstrijden</h2>
                        <p>type and scrambled it to make a type specimen book. it has 
                    survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemsurvived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemaker including versions of lorem ipsumaker including versions of lorem ipsum</p>
                    </div>
                    
                </article>

                <article class="event-item event-2">
                <div class="event-text-1">
                        <h2>Game wedstrijden</h2>
                        <p>type and scrambled it to make a type specimen book. it has 
                    survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemsurvived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemaker including versions of lorem ipsumaker including versions of lorem ipsum</p>
                    </div>
                    <div class="event-img-2">
                        <img src="images/gaming.jpg" alt="Gaming plaatje" width="400">
                    </div>
                    
                    
                </article>
                <article class="event-item event-1">
                    <div class="event-img-1">
                        <img src="images/gaming.jpg" alt="Gaming plaatje" width="400">
                    </div>
                    <div class="event-text-1">
                        <h2>Game wedstrijden</h2>
                        <p>type and scrambled it to make a type specimen book. it has 
                    survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemsurvived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. it was popularised in 
                    the 1960s with the release of letraset sheets containing lorem 
                    ipsum passages, and more recently with desktop publishing 
                    software like aldus pagemaker including versions of lorem ipsumaker including versions of lorem ipsum</p>
                    </div>
                    
                </article>
            </article>
        </article>

        <article class="opacity"></article>
    </main>
    <?php 
        include ('footer.php');
    ?>
</body>

</html>
