<?php

//link classi
include_once __DIR__ . '/classi/Videogiochi.php';
include_once __DIR__ . '/classi/Utenti.php';
include_once __DIR__ . '/classi/UtentiPremium.php';

//istanze

//istanze videogiochi
$videoGiochi = [
    new Videogiochi ('The Witcher', 'Pc', 2007, 'Action RPG', 'Fantasy medievale', 'CD Projekt RED', 'Giocatore singolo', '18+', 10),
    new Videogiochi ('The Witcher 2: Assassins of Kings', 'Pc/Console', 2011, 'Action RPG', 'Fantasy medievale', 'CD Projekt RED', 'Giocatore singolo', '18+', 15),
    new Videogiochi ('The Witcher 3: Wild Hunt', 'Pc/Console', 2015, 'Action RPG', 'Fantasy medievale', 'CD Projekt RED', 'Giocatore singolo', '18+', 50),
];

//istanze utenti
$mario = new Utenti ('Mario', 'Rossi', 'mariorossi@gmail.com', 33, 'Garibaldi', 333123000);
$franco = new Utenti ('Franco', 'Bianchi', 'francobianchi@gmail.com', 27, 'Leopardi', 333123456);
$giuseppe = new Utenti ('Giuseppe', 'Verdi', 'giuseppeverdi@gmail.com', 24, 'Alighieri', 333123777);

//estensioni utenti
$carlo = new UtentiPremium ('Carlo', 'Bianchi', 'carlobianchi@gmail.com', 37, 'Leopardi', 331222345);
$carlo->capitoli_posseduti = 2;
$sergio = new UtentiPremium ('Sergio', 'Cizmja', 'sergiocizmja@gmail.com', 24, 'Olimpia', 331888345);
$sergio->capitoli_posseduti = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game store</title>
</head>
<body>

    <h1>The Witcher</h1>

    <?php
        echo $sergio->getSconto();
    ?>
    
</body>
</html>