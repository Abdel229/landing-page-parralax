<?php

require '../model/connexion.php';
//inscrit l'admin dans la base de donnée
function inscrit_admin($nom,$pswd){
    $bdd=connexion();
    $req=$bdd->prepare('INSERT INTO admin(nom,pswd) VALUES (?,?)');
    $req->execute(array(
        $nom,
        $pswd
    ));

    //vérification si l'admin a été inscrit

    $req=$bdd->prepare('SELECT * FROM admin WHERE nom=?');
    $req->execute(array(
        $nom
    ));
    $res=$req->fetch();
    if(!empty($res)){
        return TRUE;
    }
    else return FALSE;
}