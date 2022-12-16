<?php
  echo "debut <br>";

  echo "afovoany include<br>";

  include("Fonction.php");
  echo "eto<br>";

  session_start();
  echo "eto<br>";
  $_SESSION['pseudo'] = $_POST['pseudo'];
  echo "eto<br>";
  $pseudo = $_SESSION['pseudo'];
  echo "eto<br>";
  $pass = $_POST['pass'];
  if(login($dbh,$pseudo,$pass)==1){
  echo "eto<br>";
  header('Location:../pages/Accueil.php');
  }else{header('Location:../index.php');}
?>
