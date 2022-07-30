<?php

    // vérifie si les infos existe déja

    // function exist($nom,$prenoms,$mail){
    $bdd = new PDO('mysql:host=localhost;dbname=masterclass', 'root', ''/*[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]*/);
        
        $req=$bdd->prepare('SELECT * FROM students WHERE nom=?,subname=?,mail=?');
       
        $req->execute(array(
            'abdel',
            'rakibe',
            'rakibeabdelaboudou@gmail.com'
        ));
        
        
        $res=$req->fetchAll();
        var_dump($res);
    