<?php
function connect(){
    $user='postgres';
    $pass='Passw0rd';
    $dsn='pgsql:host=localhost;port=5432;dbname=immobilier';
    $dbh=null;
    try {
        $dbh = new PDO($dsn, $user, $pass);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur ! : ' . $e->getMessage();
        die();
    }
    return $dbh;
    }
$z=connect();
?>