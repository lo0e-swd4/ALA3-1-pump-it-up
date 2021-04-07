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

        include ('navbar.php');

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
        

        <article class="artiesten">
        <h1>Artiesten</h1>
            <article class="container">
                <section class="box-item item-1">
                <img src="images/snelle.jpg">
                    <?php

                    $id = 101;

                    $locatie_id = 0;
                    $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                    JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                    JOIN locaties ON evenementen.locatie_id = locaties.locatie_id WHERE artiesten.artiest_id=' .$id;
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
                    <a href="artiestinfo.php?id=101">Bekijk artiets</a>
                </section>
                <section class="box-item item-2">
                    <img src="images/ElvisPresley.jpg">
                    <?php

                    $id = 102;

                    $locatie_id = 0;
                    $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                    JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                    JOIN locaties ON evenementen.locatie_id = locaties.locatie_id WHERE artiesten.artiest_id=' .$id;
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
                    <a href="artiestinfo.php?id=102">Bekijk artiets</a>
                    
                </section>
                <section class="box-item item-2">
                    <img src="images/MileyCyrus.jpg">
                    <?php

                    $id = 103;

                    $locatie_id = 0;
                    $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                    JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                    JOIN locaties ON evenementen.locatie_id = locaties.locatie_id  WHERE artiesten.artiest_id=' .$id;
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
                     <a href="artiestinfo.php?id=103">Bekijk artiets</a>
                </section>
                
            </article>
        </article>
        <article class="artiesten">
            <article class="container">
                <section class="box-item item-1">
                    <img src="images/snelle.jpg">
                    <?php

                    $id = 103;

                    $locatie_id = 0;
                    $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                    JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                    JOIN locaties ON evenementen.locatie_id = locaties.locatie_id  WHERE artiesten.artiest_id=' .$id;
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
                     <a href="artiestinfo.php?id=103">Bekijk artiets</a>
                </section>
                <section class="box-item item-2">
                    <img src="images/snelle.jpg">
                    <?php

                    $id = 102;

                    $locatie_id = 0;
                    $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                    JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                    JOIN locaties ON evenementen.locatie_id = locaties.locatie_id  WHERE artiesten.artiest_id=' .$id;
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
                     <a href="artiestinfo.php?id=102">Bekijk artiets</a>
                    
                </section>
                <section class="box-item item-2">
                    <img src="images/snelle.jpg">
                    <?php

                    $id = 101;

                    $locatie_id = 0;
                    $sql = 'SELECT naam, statement, datum, plaatsnaam,locaties.locatie_id, gebouw FROM artiesten
                    JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
                    JOIN locaties ON evenementen.locatie_id = locaties.locatie_id  WHERE artiesten.artiest_id=' .$id;
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
                     <a href="artiestinfo.php?id=101">Bekijk artiets</a>
                </section>
                
            </article>
        </article>

        <article class="opacity"></article>
    </main>
    <?php
    include('footer.php')
    ?>
</body>

</html>