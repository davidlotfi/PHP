<?php
try{

  $dbd=new PDO('mysql:host=localhost;dbname=datephp','root','');
  echo "connection";
}catch(Exception $e){

   die('Erreur :'.$e->getMessage());
}

$today = date("H:i");
$req=$dbd->prepare('INSERT INTO prod (name,prix,datephp) VALUES (?,?,?)');

$req->execute(array($_POST['name'],$_POST['prix'],$today));
header('Location:prod.php')

?>
