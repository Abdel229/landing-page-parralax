<?php
 function connexion(){
    try {
        // $bdd=new PDO('mysql:host=ftpupload.net;dbname=masterclass','epiz_31929849','29K1LedOYoRUl',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd=new PDO('mysql:host=sql309.epizy.com;dbname=epiz_31929849_masterclass','epiz_31929849','29K1LedOYoRUl',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    return $bdd;
}
