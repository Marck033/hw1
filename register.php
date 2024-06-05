<?php

require_once("config.php");

$nome = $connessione->real_escape_string($_POST['nome']);
$cognome = $connessione->real_escape_string($_POST['cognome']);
$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";
if($connessione->query($sql) === true){
    echo "registrazione effettuata con successo";
}
else{
    echo "errore durante la registrazione $sql. " . $connessione->error;
}
?>
