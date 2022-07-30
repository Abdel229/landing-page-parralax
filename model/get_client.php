<?php
function model_get_client(){
    $bdd=connexion();
    $req=$bdd->prepare('SELECT * FROM client ORDER BY id');
    $req->execute();
    $res=$req->fetchAll();
    return $res;
}