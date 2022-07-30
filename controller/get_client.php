<?php
//récupération des clients et envoi dans la base de donné

include '../model/connexion.php';

include '../model/get_client.php';

function get_client(){
    return model_get_client();
}