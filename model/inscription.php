<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

    // insertion des données dans la base de donnée
    function insert($nom,$prenoms,$mail,$number){
        
    $bdd = new PDO('mysql:host=sql211.byetcluster.com;dbname=epiz_32235484_masterclass', 'epiz_32235484', 'LglrP8gqDZovwM');
       
        
            $req=$bdd->prepare('INSERT INTO students(nom,subname,mail,numero) VALUES(?,?,?,?)');
            $req->execute(array(
                $nom,
                $prenoms,
                $mail,
                $number
            ));
           
      
    
        
    }