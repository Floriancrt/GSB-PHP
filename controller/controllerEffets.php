<?php

require_once "../Metier/Effets.php";
require_once "../Metier/Contre_Indications.php";
require_once "../Metier/Composants.php";

require_once "../models/modelEffets.php";
require_once "../models/modelContreIndication.php";
require_once "../models/modelComposants.php";

$IdMedicament = $_GET["code"];

$effets = GetEffets($IdMedicament);
$contreIndication = GetContreIndication($IdMedicament);
$composant = GetComposants($IdMedicament);


require_once "../views/details_medicaments_view.php";

?>