<?php  
require_once __DIR__ . './data/function.php';

$psw;
$message = '';


if (!isset($_GET['length'])) {
  $message = 'Attenzione la password è di 0 caratteri';
} else {
  $psw = generateString($_GET['length']);
  $message = 'La password è:' . $message ;
  session_start();

  $_SESSION ['newpassword'] = $psw;
  
  header('Location: ./visibilityPsw.php');
}



  



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="row text-center my-3 ">
      <h1>Strong Password Generator</h1>
      <h4>Genera una password sicura</h4>

      <div class="col box">
      <form action="index.php" method="GET">
          <div class="d-flex justify-content-evenly   align-items-center">
            <label for="length" class="form-label">Lunghezza della Password:</label>
            <input type="number" class="form-control w-25 my-3" id="length" name="length">
          </div>
          <div class="">
            <button class="btn btn-primary mx-3" type='submit'>Genera Password</button>
            <button class="btn btn-secondary m-3 ">Annulla</button>
          </div>
        </form>
      </div>
     
        

        <span class="my-4">
          <?php echo $message ; $psw ?>
        </span>
     
    </div>
  </div>
  
</body>
</html>