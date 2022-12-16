<?php 
include("../inc/fonctions/Function.php");
session_start();

$id=$_SESSION['id'];
// $_SESSION['id']=$id+1;

$liste=getListHabitation();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/addhab.css">
    <title>Document</title>
</head>
<body>

    <form action="trait_telechargement.php" method="post" enctype="multipart/form-data">
        <h2>Modifier </h2>

        <input type="hidden" name="MAX_FILE_SIZE" value="100000000000">

        <p> <input type="text" name="type" id="" required value= " <?php echo $liste[$id]['typ'] ;?>"></p>
        <p> <input type="text" name="nbr_chambre" id="" required value="<?php echo $liste[$id]['nbr_de_chambre']; ?>"></p>
        <p> <input type="text" name="loyer" id="" required value="<?php echo $liste[$id]['loyer']; ?>"></p>

        <p>Veuillez selectionne les 3 photos a selectionner </p>

        <p> <input type="file" name="parcourir" enctype="multipart/form-data"></input></p>
        <p> <input type="file" name="parcourir1" enctype="multipart/form-data"></input></p>
        <p> <input type="file" name="parcourir2" enctype="multipart/form-data"></input></p>

        <p> <input type="text" name="quartier" id="" required value="<?php echo $liste[$id]['quartier']; ?>"></p>
        <p> <input type="text" name="description" id="" required value="<?php echo $liste[$id]['decription'];?>"></p>
        <p><input type="submit" value="Valider"></p>
    </form>
</body>
</html>