<?php


function GetUtilisateurs($login,$mdp)
{

    $wsdl="http://localhost:8080/WebService1.asmx?WSDL";


    $client = new SoapClient($wsdl);
    $parameters = array ('login'=> $login,'mdp'=> $mdp);
    $res = $client->GetUtilisateurs($parameters);
    $res = $res->GetUtilisateursResult;
    return $res;


}
