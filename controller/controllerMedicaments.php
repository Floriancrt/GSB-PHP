<?php

session_start();

require_once "../models/modelMedicaments.php";

$medicaments = afficherMedicaments();

require_once "../views/medicaments_view.php";

?>