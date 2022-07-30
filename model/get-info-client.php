<?php


function model_getinfo($nom){
$bdd=connexion();
$req=$bdd->prepare('SELECT nom,mail FROM client WHERE nom=?');
$req->execute(array(
    $nom
));
$res=$req->fetch();

return $res;}
