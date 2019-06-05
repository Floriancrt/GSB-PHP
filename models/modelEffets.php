<?php

require_once "../Metier/Effets.php";
require_once "../models/modelMedicaments.php";


function GetEffets($numero)
{

    $wsdl="http://localhost:8080/WebService1.asmx?WSDL";


    
        $client = new SoapClient($wsdl);
        $parameters = array('numero' => $numero);
        $res = $client->GetEffets($parameters);
        $res = $res->GetEffetsResult;
        $res = $res->string;

        $effets = array();
        $ensEffets = array();

        
        if(count($res) > 1)
        {
            foreach($res as $value) 
            {
                
                $effets[] = explode("|", $value);
                
            }
        }
        elseif(count($res) == 1)
        {
            $effets[] = explode("|", $res);

        }


        foreach($effets as $value)
        {
            $effet = new Effets($value[0],$value[1]);
            $ensEffets[] = $effet;
        }

        
         return $ensEffets;

        
}




?>