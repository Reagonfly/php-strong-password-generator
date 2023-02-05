<?php

  include __DIR__.'/functions.php';

  session_start();

  if(isset($_GET['password_length']) && is_numeric($_GET['password_length']) && $_GET['password_length'] > 0)
    $_SESSION['password_length'] = $_GET['password_length'];
  else
    header('location:./index.php?error=Invalid Imput, please insert a number');

  $_SESSION['clone'] = (isset($_GET['clone'])) ? $_GET['clone'] : '';
  $_SESSION['upper_letters'] = (isset($_GET['upper_letters'])) ? $_GET['upper_letters'] : '';
  $_SESSION['numbers'] = (isset($_GET['numbers'])) ? $_GET['numbers'] : '';
  $_SESSION['symbols'] = (isset($_GET['symbols'])) ? $_GET['symbols'] : '';

  $_SESSION['dictionary'] = 'abcdefghijklmnopqrstuvwxyz';
  setDictionary();

  $_SESSION['password'] = '';
  generatePassword();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Result</title>
</head>
<body>
  <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
    <h3><?php echo ($_SESSION['password'] != '') ? '<p class="text-danger fs-2">Password</p>: '.$_SESSION['password'] : '';?></h3>
  </div>
</body>
</html>