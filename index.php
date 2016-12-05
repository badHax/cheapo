<?php
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    require_once("models/home.php");
  }
  else{
    require_once("models/login.php");
  }
?>