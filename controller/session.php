<?php




require_once '../models/modelAuthentification.php';

$login = $_POST["login"];
$mdp = $_POST["mdp"];

$role = GetUtilisateurs($login,$mdp);

if($role == 'P')
{
    $_SESSION["login"]= $login;
    $_SESSION["mdp"]=$mdp;
    header('Location: ./controllerMedicaments.php');
    session_start();

}
else
{
    header('Location: ./connexion.php');

}

?>