<?php


$IdMedicament = $_POST["ID_Medicament"];

    if($_POST["detailsAction"] == "Details")
    {
        header("Location: controllerEffets.php?code=$IdMedicament");
    }
    else
        header("Location: ContreI_view.php?code=$IdMedicament");
    


?>