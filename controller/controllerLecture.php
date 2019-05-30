<?php

session_start();


use App\Models\Medicament;


$medicaments = Medicament::afficherMedicaments();



require_once "../views/accueil_medicaments.php";

?>