<?php
require '../model/verifie_admin.php';

//vérification si un admin existe
function verifie_admin(){
if(!exist_admin()){
    session_start();
    $_SESSION['admin']='yes';
    header('Location:../inscription.php');
    exit();
}
}
//vérification que le formulaire a été rempli
    if(!isset($_POST) || empty($_POST)){
        header('Location:../admin/index.php?n=0');
    }
extract($_POST);
//hashage du mot de passe
$pswd=hash('sha256',$pswd);
//vérifiaction des infos de l'admin

    if(!info_true($nom,$pswd)){
        header('Location:../admin/index.php?n=1');
        exit();
    }

    session_start();
    $_SESSION['nom']=$nom;
    header('Location:../admin/admin.php');