<?php 


function generateString ($n){
  $number = '0123456789';
  $minuscole = 'abcdefghijklmnopqrstuvwxyz';
  $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $simboli = '!?&%$<>^+-*/()[]{}@#_=';

  // unisco le 4 stringhe
  $united = $number . $minuscole . $maiuscole . $simboli;
  // var_dump($united);

  // $length = isset($_GET['length']);

  $generetePSW = '';

  // estraggo un numero random che salvero in $generetePSW
  for ($i = 0; $i < $n; $i++) {
    $indice = rand(0, strlen($united) -1);
    $generetePSW .= $united[$indice];
  }


  return $generetePSW;
}


?>


