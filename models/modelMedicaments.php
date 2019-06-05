<?php

require_once "../Metier/Medicament.php";

function GetMedicaments()
{

    
    $wsdl = "http://localhost:8080/WebService1.asmx?WSDL";

       

            $client = new SoapClient($wsdl);
            $res = $client->affichermedicaments();
            $res = $res->afficherMedicamentsResult;
            $res = $res->string;

            $medicaments = array();
            $ensMedicaments = array();

            if(count((array)$res) == 1)
            {
                $medicaments[] = explode("|", $res);
                $medicament = new Medicament($medicaments[0][0], $medicaments[0][1], $medicaments[0][2]);        
                $ensMedicaments[$medicament->getNumero()] = $medicament;
            }
            
            elseif(count((array)$res) > 1)
            {
                for($i = 0; $i < count($res); $i++)
                {
                    $medicaments[] = explode("|", $res[$i]);
                    $medicament = new Medicament($medicaments[$i][0], $medicaments[$i][1], $medicaments[$i][2]);
                    $ensMedicaments[$medicament->getNumero()] = $medicament;
                }
            }
            
            return $ensMedicaments;
        }







?>


















