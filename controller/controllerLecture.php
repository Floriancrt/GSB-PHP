<?php

session_start();

require_once "../models/modelMedicaments.php";

$medicaments = GetMedicaments();

require_once "../views/accueil_medicaments.php";

?>