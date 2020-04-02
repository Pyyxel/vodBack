<?php
try   {
  $user = "root";
  $pass = "";
  $host = "localhost";
  $db ="dbs296644";
  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=$host;dbname$db;charset=utf8", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}

//dbu526656
//db745000303657.hosting-data.io
//dbs296644
//db745000303657.hosting-data.io
?>
