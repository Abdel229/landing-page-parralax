<?php

    function verifie_admin($name,$pswd){
        echo "ok";
$bdd = new PDO('mysql:host=sql211.byetcluster.com;dbname=epiz_32235484_masterclass', 'epiz_32235484', 'LglrP8gqDZovwM');        $req=$bdd->prepare('SELECT id FROM admin WHERE name=? AND pswd=?');
        $req->execute(array(
            $name,
            $pswd
        ));
        return $req->fetchAll();
    }