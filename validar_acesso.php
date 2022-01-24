<?php

  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: login.php?login=erro2');
  }
  // echo "<pre>";
  // print_r($_SESSION);
  // echo"</pre>";
?>