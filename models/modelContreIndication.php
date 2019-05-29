<?php

class ContreIndication
{

    /**
     * Permet d'obtenir les contre-indications d'un médicament
     * @param string $numero identifiant du médicament
     * @return array les contre-indications
     */
    function GetContreIndication($numero)
    {

        $wsdl="http://localhost:8080/WebService1.asmx?WSDL";


        $client = new SoapClient($wsdl);
        $parameters = array('numero' => $numero);
        $res = $client->GetContreIndication($parameters);
        $res = $res->GetContreIndicationResult;
        $res = $res->string;

        $contreIndications = array();
        $enscontreIndication = array();


            
        if(count((array)$res) == 1)
        {
            $contreIndications[] = explode("|", $res);
            $contreIndication = new Contre_Indications($contreIndications[0][0], $contreIndications[0][1]);        
            $enscontreIndication[] = $contreIndication;
        }


            
        elseif(count((array)$res) > 1)
        {
            for($i = 0; $i < count($res); $i++)
            {
                $contreIndications[] = explode("|", $res[$i]);
                $contreIndication = new Contre_Indications($contreIndications[$i][0], $contreIndications[$i][1]);
                $enscontreIndication[] = $contreIndication;
            }
            
        }

            
        return $enscontreIndication;


        }



}








