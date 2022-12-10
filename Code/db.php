<?php


// Waar staat de database?
$host = "adainforma.tk";
$dbnaam = "portfolio_jakub";
$user = "jakub";
$wachtwoord = "05_9sgKu";


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbnaam", $user, $wachtwoord);
   // echo "gelukt"; deze gebruiken bij koppelen om te testen of alles het doet
    //conn is de variabele waar de verbinding in is opgeslagen



}

catch (PDOException $ex){
    echo "verbinding mislukt";
}



?>
