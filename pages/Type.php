<?php

$type=null;
$listHabitat=array();
// echo "eto<br>";
if (isset($_GET['idtype'])) {
    $idtype=$_GET['idtype'];
    $type=$_GET['type'];
    $listHabitat=getHabitationByCategorie($idtype);
}
// print_r($listHabitat);

?>

    <div class="container">
        <div class="row">
        <?php for ($i=0; $i < count($listHabitat); $i++) { ?>
            <div class="card" style="width: 18rem;">
            <img src="<?php echo '../assets/img/'.$listHabitat[$i]['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $listHabitat[$i]['quartier']; ?></h5>
                <p class="card-text">Jour: <?php echo $listHabitat[$i]['loyerparjour']; ?>$</p>
                <p class="card-text">Type: <?php echo $type; ?></p>
                <a href="#" class="btn btn-warning">Modifier</a>
                <a href="./Traitement.phpidSuppr=<?php echo $listHabitat[$i]['id']; ?>" class="btn btn-danger">Supprimer</a>
                <a href="Accueil.php?page=Details.php&id=<?php echo $listHabitat[$i]['id']; ?>" class="btn btn-info" >Info</a>
            </div>
        </div>
        <?php } ?>    
        </div>
        <!-- <a class="btn btn-primary" href="Accueil.php">Retour</a> -->
    </div>
