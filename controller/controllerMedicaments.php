<?php

session_start();

use App\Metier\Medicament;

$medicaments = afficherMedicaments();

require_once "../views/medicaments_view.php";

?>