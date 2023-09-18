<?php

global $connessione;
$connessione = mysqli_connect('127.0.0.1', 'root','', 'game', '3306');

if(mysqli_connect_errno()) {
  printf("<p>Collegamento con il database impossibile: errore %s</p>\n", mysqli_connect_error());
}


?>
