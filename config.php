<?php

$host = "localhost";
$user = "ciao";
$password= "";
$db = "jennyfer";

$connessione = new mysqli($host, $user, $password, $db);

if($connessione === false){
    die("Errore durante la connessione: " . $connessione->connect_error);
}

?>

