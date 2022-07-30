<?php
    require 'connexion.php';
//verification si les info existe déja
function exist($info){
    $bdd=connexion();
    
        extract($info);
        
        //Vérification si les informations existe déja
        $req=$bdd->prepare('SELECT * FROM client WHERE nom=? AND mail=?');
        $req->execute(array(
            $nom,
            $mail
        ));
        $res=$req->fetch();
        if(!empty($res)){
            return TRUE;
        }
        else{
            return FALSE;
        }
}
    //insertion des données dans la base de donnée 
    function insert($info){
        $bdd=connexion();
        extract($info);


        //insertion des éléménts dans la base de donné
        $req=$bdd->prepare('INSERT INTO client(nom,birth_day,countries,mail,phone_number,city,business_name,business_number,activity_area,business_date,create_time) VALUES(?,?,?,?,?,?,?,?,?,?,NOW())');
        $req->execute(array(
            $nom,
            $birth_day,
            $countries,
            $mail,
            $phone_number,
            $city,
            $business_name,
            $business_number,
            $activity_area,
            $business_date
        ));

        //vérification si les info ont eté entré
        $req=$bdd->prepare('SELECT * FROM client WHERE nom=?');
        $req->execute(array(
            $nom
        ));
        $res=$req->fetch();
        if(!empty($res)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    //recupéraation du mail et du nom du client

  