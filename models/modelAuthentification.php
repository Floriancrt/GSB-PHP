<?php



class Authentification
{

    /**
     * Permet d'obtenir les participants d'une activité complémentaire.
     * @param string $login login de l'utilisateur
     * @param string $mdp mot de passe de l'utilisateur
     * @return array les participants
     */
    function GetUtilisateurs($login,$mdp)
    {

        $wsdl="http://localhost:8080/WebService1.asmx?WSDL";


        $client = new SoapClient($wsdl);
        $parameters = array ('login'=> $login,'mdp'=> $mdp);
        $res = $client->GetUtilisateurs($parameters);
        $res = $res->GetUtilisateursResult;
        return $res;


    }

}
