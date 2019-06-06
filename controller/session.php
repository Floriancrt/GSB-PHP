<?php


session_start();

require_once '../models/modelAuthentification.php';

$login = $_POST["login"];
$mdp = $_POST["mdp"];

$role = GetUtilisateurs($login,$mdp);

switch($role)
{  
    case 'P':

        $_SESSION["login"]= $login;
        $_SESSION["mdp"]=$mdp;
        header('Location: ./controllerMedicaments.php');
        break;
    
    case 'V':

        $_SESSION["login"]= $login;
        $_SESSION["mdp"]=$mdp;
        header('Location: ./controllerAC.php');
        break;

    case 'R':

        $_SESSION["login"]= $login;
        $_SESSION["mdp"]=$mdp;
        header('Location: ./controllerAC.php');


    default: 
    
        header('Location: ./connexion.php');

}


?>