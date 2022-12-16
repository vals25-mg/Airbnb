<?php
include('../inc/Fonction.php');
session_start();
$listType=getTypes();
$page='Liste.php';
if (isset($_GET['page'])) {
    $page=$_GET['page'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="../assets/css/accueil.css">
</head>
<body>
   
    <div class="container">
        <div class="row">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">VAK'ANS EH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Accueil.php?page=Ajouter.php">Ajouter</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../inc/deconnection.php">Deconnecter</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " ><em><ul>
                    <?php echo $_SESSION['pseudo']; ?>
                    </ul></em></a>
                    </li>
                </ul>
                <form class="d-flex" action="Accueil.php" method="get">
                    <input type="hidden" name="page" value="recherche.php">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php for ($i=0; $i < count($listType); $i++) { ?>
            <div class="col border-bottom">
                <a href="Accueil.php?page=Type.php&idtype=<?php echo $listType[$i]['id']; ?>&type=<?php echo $listType[$i]['valeur']; ?>">
                <?php echo $listType[$i]['valeur']; ?></a>
            </div>
         <?php } ?>   
        </div>
    </div>
  <?php include($page); ?>
</body>
</html>