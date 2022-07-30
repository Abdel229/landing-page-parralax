<?php

require 'connexion.php';
//vérification si un admin exist
function exist_admin(){
    $bdd=connexion();
    $req=$bdd->prepare('SELECT * FROM admin');
    $req->execute();
    $res=$req->fetch();
    if(!empty($res)){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
//verification du nom et mot de passe de l'admin
function info_true($nom,$pswd){
    $bdd=connexion();
    $req=$bdd->prepare('SELECT * FROM admin WHERE nom=? AND pswd=?');
    $req->execute(array(
        $nom,
        $pswd
    ));
    $res=$req->fetch();
    if(!empty($res)){
        return TRUE;
    }
    else return FALSE;
}



