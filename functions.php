<?php

$pswlength = $_GET['psw_length'];

function getRandomPassword($pswlength){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
  $password = '';
  for($i = 0; $i < $pswlength; $i++){
    $password .= $characters[rand (0, strlen($characters)- 1)];
  }
  echo $password;
};

?>