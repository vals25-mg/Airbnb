<?php
  include("Connection.php");
  include("Fonction.php");session_start();
  $_SESSION['pseudo'] = $_POST['pseudo'];
  $pseudo = $_SESSION['pseudo'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $nationalite = $_POST['nationalite'];
  $pass = $_POST['pass'];
  inscription($dbh,$pseudo,$email,$phone,$nationalite,$pass);
  header('Location:../pages/Accueil.php');
?>
