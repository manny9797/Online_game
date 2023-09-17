<?php
// Connessione al database
include "Database.php";

// Recupero dei dati inviati dal form
if (isset($_POST['nickname']) && isset($_POST['password'])) {
$enteredUsername = $_POST['nickname'];
$enteredPassword = $_POST['password'];

// Query per selezionare l'utente corrispondente all'username immesso
$query = "SELECT * FROM users WHERE USERNAME = '$enteredUsername'";
$result = $connessione->query($query);

if ($result) {
$row = $result->fetch_assoc();
$storedPassword = $row['PASSWORD'];
$flagChampions = $row['flagChamp'];
$codChampions = $row['FantaChampions'];
$connessione->close();

    // Confronto tra la password immessa e quella nel database
    if ($enteredPassword === $storedPassword) {
      session_start();
      $_SESSION['username'] = $enteredUsername;
      $_SESSION['flagChamp'] = $flagChampions;
      $_SESSION['code'] = $codChampions;
      header("Location: home-log.php");
} else {
  echo "<p>Password errata, torna indietro e riprova</p>";
}
} else {
  echo "<p>Si è verificato un errore, torna indietro e riprova</p>";
}
}
?>
