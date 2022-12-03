<?php

include './functions.php';

//se il valore in get non è vuoto apro la sessione
if(!empty($_GET['psw_length'])){
  session_start();
  // inizializzo una variabile di sessione = alla funzione per generare la password
  $_SESSION['psw_length'] = getRandomPassword($pswlength);
  header('Location: ./psw.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  
  <style>
    .my-container{
      width: 60%;
    }
  </style>

  <title>PHP Password Generator</title>
</head>
<body class="bg-info">
  <div class="container my-container bg-white rounded-3 mt-5 pt-3 pb-5">
    <h1 class="text-center mb-3">Strong Password Generator</h1>
    <form action="./index.php" method="GET" class="ps-3 pe-3">

      <div class="row">
        <div class="col">
         <label for="input" class="form-label">Inserisci la lunghezza della password da generare</label>
         <input type="number" class="form-control" name="psw_length">
        </div>
      </div>
      <div class="row mt-3">
      <div class="col text-center">
        <button type="submit" class="btn btn-info">Genera</button>
        </div>
      </div>
    </form>
  </div>
  
</body>
</html>