<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM user WHERE user='".$_POST['username']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     if($_SESSION['user']['admin']==1){
          header('Location:../security/adminpanel.php');//on le redirige sur la page d'accueil du site !
     }else{
          header('Location: index.php');
     }
}

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>