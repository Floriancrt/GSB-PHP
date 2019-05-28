<?php


function GetComposants($numero)
{
    $wsdl="http://localhost:8080/WebService1.asmx?WSDL";


    $client = new SoapClient($wsdl);
    $parameters = array('numero' => $numero);
    $res = $client->GetComposants($parameters);
    $res = $res->GetComposantsResult;
    $res = $res->string;

    $composants = array();
    $enscomposants = array();
    
        if(count((array)$res) == 1)
        {
            $composants[] = explode("|", $res);
            $composant = new Composants($composants[0][0],$composants[0][1]);        
            $enscomposants[] = $composant;
        }


        elseif(count((array)$res) > 1)
        {
            for($i = 0; $i < count($res); $i++)
            {
                $composants[] = explode("|", $res[$i]);
                $composant = new Composants($composants[$i][0],$composants[$i][1]);
                $enscomposants[] = $composant;
            }
        
        }

            // var_dump($composant);
        return $enscomposants;
    


}






