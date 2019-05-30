<?php


use App\Metier\Effets;
use App\Metier\Contre_Indications;
use App\Metier\Composants;

use App\Models\Effet;
use App\Models\ContreIndicaction;
use App\Models\Composant;


$IdMedicament = $_GET['code'];

$effets = Effet::GetEffets($IdMedicament);
$contreIndication = ContreIndication::GetContreIndication($IdMedicament);
$composant = Composant::GetComposants($IdMedicament);


require_once "../views/details_medicaments_view.php";

?>