<?php
  session_start();
  if (empty($_GET))
  die("Tienes que pasar algun parametro por GET.");
  $a = $_GET['id'];
?>
