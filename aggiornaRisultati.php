<?php
include "Database.php";
session_start();
if (isset($_POST)) {
$data = file_get_contents('php://input');
$dataDecoded = json_decode($data, true);

$query = "UPDATE fantachampions
          SET input = '$dataDecoded'
          WHERE username = 'ADMIN'";
      if ($connessione->query($query) === TRUE) {
          //CORRETTO
      } else {
          //PROBLEMI
      }

      $connessione->close();

}
echo json_encode($dataDecoded);
?>
