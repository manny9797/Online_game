<?php
include "Database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dataAdmin = null;
$sql = "SELECT username, input FROM fantachampions WHERE username='ADMIN'";
$result = mysqli_query($connessione, $sql);
// CREARE MAPPA (user, PUNTI)
if ($result) {

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $jsonData = $row['input'];
      $puntiTot = 0;
      $i = 0;
      $dataAdmin= json_decode($jsonData, true);

    }
}
}

if ($dataAdmin != null) {
$sql2 = "SELECT username, input FROM fantachampions WHERE username != 'ADMIN'";
$result2 = mysqli_query($connessione, $sql2);

if ($result2) {
  if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {

      $user = $row['username'];
      $jsonData = $row['input'];
      $puntiTot = 0;
      $i = 0;
      $dataDecoded= json_decode($jsonData, true);

      while ($i != 8) {
      $lista1 = $dataAdmin[$i];
      $lista2 = $dataDecoded[$i];
      $c = 0;

      while ($c != 4) {
      if ($lista1[$c] == $lista2[$c]) {

      if ($c == 0) {
        $puntiTot += 15;
      } else if ($c == 1) {
        $puntiTot +=10;
      }
      }

      $c++;
      }

      $i++;
      }
      $query = "UPDATE fantachampions
                SET PUNTI_INPUT = $puntiTot
                WHERE username = '$user'";
            if ($connessione->query($query) === TRUE) {

            } else {
                //PROBLEMI
            }
    }
}
}

}

echo "PUNTEGGI AGGIORNATI CORRETTAMENTE";
}
?>
