<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <title>Accueil</title>
</head>
<body>
    <style>
        .nav-item.ex1:hover ,.nav-item.ex1:active{
            background-color: yellow;
        }
    </style>
    <div class="container">
        <div class="row">
        
            <ul class="nav nav-pills justify-content-end">
             <li class="nav-item ">
                <input type="text" name="search" id="search">
                <button type="submit">Search</button>
             </li>   
            <li class="nav-item">
                <a class="nav-link" href="#">Ajouter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Modifier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Supprimer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Deconnecter</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">User</a>
                </li>
                
            </ul>
        </div>
    </div>
</body>
</html>