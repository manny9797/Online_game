<?php
include "Database.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputCodice = $_POST['cod'];
    $username = $_SESSION['username'];
    // Esegui la query per cercare il codice nella tabella 'users'
    $query = "SELECT * FROM users WHERE USERNAME='$username' AND FantaChampions = '$inputCodice'";
    $result = $connessione->query($query);

    if ($result->num_rows === 1) {
      $updateQuery = "UPDATE users SET flagChamp = 1 WHERE USERNAME='" . $username . "'";
      if ($connessione->query($updateQuery) === TRUE) {

          $_SESSION['flagChamp'] = 1;

          $query2 = "INSERT INTO fantachampions (username, input, bomber, PUNTI_INPUT, PUNTI_BOMBER)
                          VALUES ('$username', '{}', '', '0', '0')";

                if ($connessione->query($query2) === TRUE) {
                    echo "Registrazione alla competizione ok.";
                    header("Location: champions.php");
                } else {
                    echo "Errore nell'inserimento dei dati nel database: " . $connessione->error;
                }


      } else {
          echo "Errore nell'aggiornamento della riga: " . $connessione->error;
      }

    } else {
        // Il codice non corrisponde, mostra un messaggio di errore
        echo '<span style="color: red;">Codice errato, riprova.</span>';
    }

    // Chiudi la connessione al database
    $connessione->close();
}
 ?>
