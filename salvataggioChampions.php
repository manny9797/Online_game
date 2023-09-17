<?php
include "Database.php";
session_start();
if (isset($_POST)) {
$data = file_get_contents('php://input');
$dataDecoded = json_decode($data, true);
$username = $_SESSION['username'];
$_SESSION['input'] = $dataDecoded;
$inp = json_encode($dataDecoded);
$updateQuery = "UPDATE fantachampions SET input = $inp WHERE username='" . $username . "'";

      if ($connessione->query($updateQuery) === TRUE) {
          echo "Dati inseriti correttamente nel database.";
      } else {
          echo "Errore nell'inserimento dei dati nel database: " . $connessione->error;
      }

$connessione->close();
}
echo json_encode($dataDecoded);
?>
