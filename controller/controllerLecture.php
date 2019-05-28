<?php

session_start();

require_once "../models/modelMedicaments.php";

$medicaments = afficherMedicaments();

require_once "../views/accueil_medicaments.php";

?>