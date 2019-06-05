<?php


session_start();
if(!isset($_SESSION["login"]))header("Location: ./connexion.php");

require_once "../models/modelMedicaments.php";
require_once "../models/modelActiviteComp.php";

$medicaments = GetMedicaments();
$activitescomp = afficherAC();


require_once "../views/medicaments_AC_view.php";

?>

