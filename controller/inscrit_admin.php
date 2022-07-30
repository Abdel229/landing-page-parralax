<?php
//vérification des infos de l'admin après inscription
require '../model/inscrit_admin.php';

      /*vérification des infos envoyé par le formulaire*/
//Vérification si le post est vide
if(!isset($_POST) || empty($_POST)){
    header('Location:../admin/inscription.php?n=0');
    exit();
}
extract($_POST);
//vérification si le mot de passe et la confirmation sont identique
if($pswd !== $confpswd){
    header('Location:../admin/inscription.php?n=1');
    exit();
}

$pswd=hash('sha256',$pswd);
//vérification si l'admin a été inscrit

$inscrit=inscrit_admin($nom,$pswd);


if($inscrit){
    header('Location:../admin/index.php');
}
else{
    header('Location:../admin/inscription.php?n=2');
}
