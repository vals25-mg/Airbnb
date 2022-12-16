<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
include("../inc/fonctions/Function.php");
session_start();
$dossier = '../assets/img/all/';
$fichier = basename($_FILES['parcourir']['name']); 
$fichier1 = basename($_FILES['parcourir1']['name']); 
$fichier2 = basename($_FILES['parcourir2']['name']); 
$taille_maxi = 100000000000000000; 
$taille = filesize($_FILES['parcourir']['tmp_name']); 
$extensions = array('.png', '.gif', '.jpg', '.jpeg','.txt','.PNG'); 
$extension = strrchr($_FILES['parcourir']['name'], '.'); 
$extension1 = strrchr($_FILES['parcourir1']['name'], '.'); 
$extension2 = strrchr($_FILES['parcourir2']['name'], '.'); 
//Début des vérifications de sécurité... 
if(!in_array($extension, $extensions) && !in_array($extension2, $extensions) && !in_array($extension3, $extensions)) //Si l'extension n'est pas dans le tableau 
{
   $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc ';
} 
if($taille>$taille_maxi)
{    
   $erreur = 'Le fichier est trop gros...'; 
} 
if(!isset($erreur)) 
{     
   $fichier = strtr($fichier,           
   'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',           
   'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');     
   $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);     
   $fichier1 = strtr($fichier1,           
   'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',           
   'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');     
   $fichier1 = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier1);   

   $fichier2 = strtr($fichier2,           
   'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',           
   'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');     
   $fichier2 = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier2);   


   if(move_uploaded_file($_FILES['parcourir']['tmp_name'], $dossier . $fichier)) //Si      
   {          
      if(move_uploaded_file($_FILES['parcourir1']['tmp_name'], $dossier . $fichier1)){
         if(move_uploaded_file($_FILES['parcourir2']['tmp_name'], $dossier . $fichier2)){
            $_SESSION['parcourir']=$fichier;
            $_SESSION['parcourir1']=$fichier1;
            $_SESSION['parcourir2']=$fichier2;
            // upload($type,$nbr,$loyer,$photo1,$photo2,$photo3,$quartier,$description)
            // upload($_POST['type'],$_POST['nbr_chambre'],$_POST['loyer'],$_SESSION['parcourir'],$_SESSION['parcourir1'],$_SESSION['parcourir2'],$_POST['quartier'],$_POST['description']);
            // UPLOAD($_SESSION['parcourir'],$_POST['name'],$_POST['first_name'],$_POST['date']);
            // header('Location:cv.php?p=liste');    
            update_habitation($_SESSION['id'],$_POST['type'],$_POST['nbr_chambre'],$_POST['loyer'],$_SESSION['parcourir'],$_SESSION['parcourir1'],$_SESSION['parcourir2'],$_POST['quartier'],$_POST['description']);
            header('Location:acceuil.php');
         }
      }
   }    
   else   
   {          
       echo 'Echec de l\'upload !';     
   }
}
else
{
   echo $erreur;
} 
?>
</body>
</html>