<?php
 include('Connection.php');
 

 function getHabitation(){
     $bdd=connect();
        $answer=array();
        $result=$bdd->query("SELECT * FROM habitation");
    $i=0;
foreach ($result as $row) {
        $answer[$i]['id']=$row['id'];
        $answer[$i]['idtype']=$row['idtype'];
        $answer[$i]['nombreDeChambre']=$row['nombreDeChambre'];
        $answer[$i]['loyerparjour']=$row['loyerparjour'];
        $answer[$i]['image']=$row['image'];
        $answer[$i]['quartier']=$row['quartier'];
        $answer[$i]['description']=$row['description'];
        $answer[$i]['nblits']=$row['nblits'];
        $i++;
    }
    // print_r($answer);
    $result->closeCursor();

    return $answer;
 }
 function getHabitationByCategorie($type){
    $bdd=connect();
       $answer=array();
// echo "eto ambony requete<br>";
// echo "SELECT * FROM habitation WHERE idtype=".$type;
       $result=$bdd->query("SELECT * FROM habitation WHERE idtype='".$type."'");
   $i=0;
// echo "eto ambany requete<br>";

foreach ($result as $row) {
       $answer[$i]['id']=$row['id'];
       $answer[$i]['idtype']=$row['idtype'];
       $answer[$i]['nombreDeChambre']=$row['nombreDeChambre'];
       $answer[$i]['loyerparjour']=$row['loyerparjour'];
       $answer[$i]['image']=$row['image'];
       $answer[$i]['quartier']=$row['quartier'];
       $answer[$i]['description']=$row['description'];
       $answer[$i]['nblits']=$row['nblits'];
       $i++;
   }
//    print_r($answer);
   $result->closeCursor();

   return $answer;
}
function getHabitationByid($id){
    $bdd=connect();
       $answer=array();
// echo "eto ambony requete<br>";
// echo "SELECT * FROM habitation WHERE idtype=".$type;
       $result=$bdd->query("SELECT * FROM habitation WHERE id='".$id."'");
   $i=0;
// echo "eto ambany requete<br>";

foreach ($result as $row) {
       $answer[$i]['id']=$row['id'];
       $answer[$i]['idtype']=$row['idtype'];
       $answer[$i]['nombreDeChambre']=$row['nombreDeChambre'];
       $answer[$i]['loyerparjour']=$row['loyerparjour'];
       $answer[$i]['image']=$row['image'];
       $answer[$i]['quartier']=$row['quartier'];
       $answer[$i]['description']=$row['description'];
       $answer[$i]['nblits']=$row['nblits'];
       $i++;
   }
//    print_r($answer);
   $result->closeCursor();

   return $answer;
}
function getTypes(){
    // echo "Tafiditra getType";
    $bdd=connect();
       $answer=array();
       $result=$bdd->query("SELECT * FROM type");
   $i=0;
foreach ($result as $row) {
       $answer[$i]['id']=$row['id'];
       $answer[$i]['valeur']=$row['valeur'];
       $i++;
   }
   $result->closeCursor();
//    echo "Tafivoaka getType";
   return $answer;
}
function supprimer($idSuppr){
    $bdd=connect();
    $r=$bdd->prepare('DELETE FROM Habitation WHERE id=?');
    $r->execute(array($idSuppr));

}
function ajouter($idType,$nombreDeChambre,$loyerparjour,$image,$quartier,$description,$nblits){
    $bdd=connect();
    $r=$bdd->prepare('INSERT INTO Habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
    VALUES(?,?,?,?,?,?,?)');
    $r->execute(array($idType,$nombreDeChambre,$loyerparjour,$image,$quartier,$description,$nblits)); 
}
function inscription($dbh,$pseudo,$email,$phone,$nationalite,$pass){
    $admin = 0;
    $pdostat = $dbh->exec("insert into users (email,password,pseudo,tel,nationalite,estAdmin) values('".$email."','".$pass."','".$pseudo."','".$phone."','".$nationalite."',".$admin.")");
  }

  function getidUsers($dbh,$user){
    $id = 0;
    $pdostat = $dbh->query("SELECT id FROM users");
    foreach ($pdostat as $key) {
      $id = $key['id'];
    }
    return $id;
  }

  function login($dbh,$pseudo,$pass){
    $dbh=connect();
    $count = 0;
    $pdostat = $dbh->query("SELECT * FROM users WHERE pseudo = '".$pseudo."' and password = '".$pass."'");
    foreach ($pdostat as $key) {
      $count++;
    }
    return $count;
  }

  function getSearch($dbh,$adresse,$arrivee,$depart,$nb1,$nb2){
    $lists = array();
    $image = array();
    $quartier = array();
    $loyer = array();
    $id = array();
    $indice = 0;
    $dbh=connect();
    $pdostat = $dbh->query("SELECT image,quartier,loyerparjour,id FROM habitation where quartier like'%".$adresse."%'");
    foreach ($pdostat as $key) {
          $image[$indice] = $key['image'];
          $quartier[$indice] = $key['quartier'];
          $loyer[$indice] = $key['loyerparjour'];
          $id[$indice] = $key['id'];
          $indice++;
    }
    $lists[0] = $image;
    $lists[1] = $quartier;
    $lists[2] = $loyer;
    $lists[3] = $id;
    return $lists;
  }

?>
