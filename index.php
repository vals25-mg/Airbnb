<?php
  include 'inc/Connection.php';
  session_start();
  include './inc/head.php';
  if(isset($_GET['pageInsc'])){
    $insc = "pages/".$_GET['pageInsc'].".php";
  }
  if(isset($insc) && is_file($insc)){
    include($insc);
  }else{
    include 'pages/login.php';
  }
?>