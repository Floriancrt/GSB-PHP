<?php


function afficherAC($numero)
{
    $wsdl = "http://localhost:8080/WebService1.asmx?WSDL";

    $client = new SoapClient($wsdl);
    $res = $client->afficherAC();
    $res = $res->afficherACResult;
    $res = $res->string;

    $activitesC = array();
    $ensAC = array();

    if(count((array)$res) == 1)
    {
        $activitesC[] = explode("|", $res);
        $activiteC = new ActivitesC($activitesC[0][0], $activitesC[0][1], $activitesC[0][2], $activitesC[0][3], $activitesC[0][4], $activitesC[0][5], $activitesC[0][6], $activitesC[0][7], $activitesC[0][8]);        
        $ensAC[$activiteC->getNumero()] = $medicament;
    }

}


