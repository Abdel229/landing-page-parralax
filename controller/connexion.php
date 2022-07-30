<?php

require '../model/verifie-admin.php';
function arrayEmpty($tab)
{
    // Si (apparemment) non vide => tester si au moins une valeur non nulle
    if (!empty($tab)){
        foreach ($tab as $valeur)
            if ($valeur !== null){
                return false;
    }
    }
    return true;
}

    // vérification si les informations entrées sont correct
    if (empty($_POST) || !isset($_POST)) {
        header('Location:../view/connexion?error=0');
        
        exit();
    }
    echo "hey";
   //  die(var_dump($_POST));
    extract($_POST);
    $name = htmlspecialchars($name);
    $pswd = htmlspecialchars($pswd);
  
 //verification si les infos son correct
 $exist=verifie_admin($name,$pswd);
 $exist=arrayEmpty($exist);
 

 if($exist){
    header('Location:../view/connexion.php?error=1');
    exit();
 }else{
    session_start();
    $_SESSION['admin']='Connecter';
    header('Location:../admin/index.php');
    
 }