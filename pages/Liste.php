<div class="container" id="affichageHabitation">
        <div class="row">
            <?php 
            $listHabitation=getHabitation();
            for ($i=0; $i < count($listHabitation); $i++) { ?>
            
        <div class="card" style="width: 18rem;">
            <img src="<?php echo '../assets/img/'.$listHabitation[$i]['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $listHabitation[$i]['quartier']; ?></h5>
                <p class="card-text">Jour: <?php echo $listHabitation[$i]['loyerparjour']; ?>$</p>
                <a href="#" class="btn btn-warning">Modifier</a>
                <a href="./Traitement.php?idSuppr=<?php echo $listHabitation[$i]['id']; ?>" class="btn btn-danger">Supprimer</a>
                <a href="Accueil.php?page=Details.php&id=<?php echo $listHabitation[$i]['id']; ?>" class="btn btn-info">Info</a>
            </div>
        </div>
            
    <?php } ?>
        </div>
</div>