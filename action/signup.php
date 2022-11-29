<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(username,password) VALUES(:username,:password)";
$dataBinded=array(
    
    ':username'   => $_POST['username'], 
    ':password'=> $_POST['password'], 
    
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>