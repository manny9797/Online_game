<?php
session_start();
if (isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
    html, body {
    display: flex;
    justify-content: center;
    height: 100%;

    }
    body, div, h1, form, input, p {
    padding: 0;
    margin: 0;
    outline: none;
    font-family: Roboto, Arial, sans-serif;
    font-size: 16px;
    color: #666;
    }
    div {
      text-align: center;
    }
    h1 {
    padding: 10px 0;
    font-size: 32px;
    font-weight: 300;
    text-align: center;
    }

    p {
    font-size: 12px;
    }
    hr {
    color: #a9a9a9;
    opacity: 0.3;
    }
    .main-block {
    max-width: 360px;
    min-height: 480px;
    margin: auto;
    border-radius: 5px;
    border: solid 1px #ccc;
    box-shadow: 1px 2px 5px rgba(0,0,0,.31);
    background: #ebebeb;
    text-align: center;
    }
    form {
    width: 70%;
    padding-left: 15%;
    }
    .account-type, .gender {
    margin: 15px 0;
    }
    input[type=radio] {
    display: none;
    }
    label#icon {
    margin: 0;
    border-radius: 5px 0 0 5px;
    }
    label.radio {
    position: relative;
    display: inline-block;
    padding-top: 4px;
    margin-right: 20px;
    text-indent: 30px;
    overflow: visible;
    cursor: pointer;
    }
    label.radio:before {
    content: "";
    position: absolute;
    top: 2px;
    left: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #ff0000;
    }
    label.radio:after {
    content: "";
    position: absolute;
    width: 9px;
    height: 4px;
    top: 8px;
    left: 4px;
    border: 3px solid #fff;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
    opacity: 0;
    }
    input[type=radio]:checked + label:after {
    opacity: 1;
    }
    input[type=text], input[type=password] {
    width: calc(100% - 57px);
    height: 36px;
    margin: 13px 0 0 -5px;
    padding-left: 10px;
    border-radius: 0 5px 5px 0;
    border: solid 1px #cbc9c9;
    box-shadow: 1px 2px 5px rgba(0,0,0,.09);
    background: #fff;
    }
    input[type=password] {
    margin-bottom: 15px;
    }
    #icon {
    display: inline-block;
    padding: 9.3px 15px;
    box-shadow: 1px 2px 5px rgba(0,0,0,.09);
    background: #ff0000;
    color: #fff;
    text-align: center;
    }
    .btn-block {
    margin-top: 10px;
    text-align: center;
    }
    button {
    width: 100%;
    padding: 10px 0;
    margin: 10px auto;
    border-radius: 5px;
    border: none;
    background: #ff0000;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    }
    button:active {
            transform: scale(0.98);
            /* Scaling button to 0.98 to its original size */
            box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
            /* Lowering the shadow */
        }
    .center-image {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .center-image img {
    max-width: 40%; /* Assicura che l'immagine non superi la larghezza del suo contenitore */
    max-height: 40%; /* Assicura che l'immagine non superi l'altezza del suo contenitore */
  }
    </style>
  </head>
<body>
  <div class="main-block">
    <div class="center-image">
    <img src="image (1).png" alt="Centered Image">
    </div>
    <h1>CODICE</h1>
    <form action="controllaCodice.php" method="post">
      <hr>
      <div>
      <input type="text" name="cod" id="cod" placeholder="Inserisci codice" maxlength="6" required/><br>
      </div>
      <hr>
      <div class="btn-block">
        <button type="submit">Entra</button>
      </div>
    </form>
  </div>
</body>
</html>
<?php
} else {
  header("Location: index.php");
}
 ?>
