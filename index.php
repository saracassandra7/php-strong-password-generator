<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  
  <title>PHP Password Generator</title>
</head>
<body>
  <div class="container">
    <h1>Strong Password Generator</h1>
    <form action="./index.php" method="GET">

      <div class="row">
        <div class="col-4">
         <label for="input" class="form-label">Inserisci la lunghezza della password da generare</label>
         <input type="number" class="form-control">
        </div>
      </div>
      <div class="row mt-3">
      <div class="col-4">
        <button type="submit" class="btn btn-info">Genera</button>
        </div>
      </div>
  
    </form>
  </div>
  
</body>
</html>