<?php
  
  include '../inc/fonction.php';
  $adresse = $_GET['adresse'];
  $arrivee = $_GET['arrivee'];
  $depart = $_GET['depart'];
  $nb1 = $_GET['adultes'];
  $nb2 = $_GET['enfants'];
  if($adresse == ""){
    $lists = getAll($dbh,$adresse,$arrivee,$depart,$nb1,$nb2);
  }else{
    $lists = getSearch($dbh,$adresse,$arrivee,$depart,$nb1,$nb2);
  }
  $listType = getTypes($dbh);
?>

 
    <div class="container" id="affichageHabitation">
        <div class="row">
            <?php for ($i=0; $i < count($lists[0]); $i++) { ?>

        <div class="card" style="width: 18rem;">
            <img src=<?php echo '../assets/img/'.$lists[0][$i]; ?> class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $lists[1][$i]; ?></h5>
                <p class="card-text">Jour: <?php echo $lists[2][$i]; ?>€</p>
                <a href="Accueil.php?page=Details.php&id=<?php echo $listHabitation[3][$i]; ?>" class="btn btn-info">Info</a>
            </div>
        </div>

    <?php } ?>
        </div>
    </div>

