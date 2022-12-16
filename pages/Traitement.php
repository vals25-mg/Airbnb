<?php
include('../inc/Fonction.php');
if(isset($_GET['idSuppr'])) supprimer($_GET['idSuppr']);

header("Location:Accueil.php");
?>