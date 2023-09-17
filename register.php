<?php
// Check if the form is submitted
include "Database.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Get form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birthday = $_POST["birthday"];
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $codChampions = rand(100000, 999999);
    $codRoyal = rand(100000, 999999);

    // Query per verificare se il nome è presente nella tabella
    $sql = "SELECT * FROM users WHERE USERNAME = '$nickname'";
    $result = $connessione->query($sql);

    if ($result->num_rows > 0) {
        // Il nome è presente nella tabella
        echo "<p>Username esistente, riprova</p>";
    } else {
      $sql = "INSERT INTO users (USERNAME, PASSWORD, NOME, COGNOME, DATA_NASCITA, EMAIL, FantaChampions, Royal, flagChamp, flagRoyal)
              VALUES ('$nickname', '$password', '$firstname', '$lastname', '$birthday', '$email', '$codChampions', '$codRoyal', '0', '0')";

      if ($connessione->query($sql) === TRUE) {
          echo "Registration successful!";
          session_start();
          $_SESSION["username"] = $nickname;
          $_SESSION['flagChamp'] = 0;
          $_SESSION['flagRoyal'] = 0;
           header("Location: home-log.php");
          exit;
      } else {
          echo "<p>Errore di Registrazione, riprova: " . $sql . "</p><br>" . $connessione->error;
      }
    }

    // Close the connection
    $connessione->close();
}
?>
