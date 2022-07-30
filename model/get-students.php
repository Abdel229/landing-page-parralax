<?php
// récupération des étudiants

function get_students(){
    require 'connexion.php';
    $req=$bdd->prepare('SELECT * FROM students ORDER BY id');
    $req->execute();
    return $req->fetchAll();
}