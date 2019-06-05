<?php


require_once "../Metier/ActivitesC.php";


    /**
     * Permet d'obtenir les participants d'une activité complémentaire.
     * @param string $id identifiant de l'activité complémentaire
     * @return array les participants
     */
    function getParticipants($id)
    {

    // service web
    $wsdl = "http://localhost:8080/WebService1.asmx?WSDL";

    $client = new SoapClient($wsdl);
    $parametres = array( 'id' => $id );
    $res = $client->GetParticipants($parametres);
    $res = $res->GetParticipantsResult;
    
    
    if( count((array)$res) > 0)
    {
        $res = $res->string;
    }        
    return $res;

    }

    /**
     * Permet d'obtenir les activités complémentaires.
     * @return array les participants
     */
    function afficherAC()
    {
        $wsdl = "http://localhost:8080/WebService1.asmx?WSDL";

        $client = new SoapClient($wsdl);

        $res = $client->afficherAC();
        $res = $res->afficherACResult;
        $res = $res->string;
       
    
        $activitescomps = array();
        $ensactivitescomp = array();

            if(count((array)$res) == 1)
            {
                $activitescomps[] = explode("|", $res);
                $activitescomp = new ActivitesC($activitescomps[0][0], $activitescomps[0][1], $activitescomps[0][2],$activitescomps[0][3],$activitescomps[0][4],$activitescomps[0][5],$activitescomps[0][6],$activitescomps[0][7]);        
                $ensactivitescomp[$activitescomp->getIdActivite()] = $activitescomp;
            }
            
            elseif(count((array)$res) > 1)
            {
                for($i = 0; $i < count($res); $i++)
                {
                    $activitescomps[] = explode("|", $res[$i]);
                    $activitescomp = new ActivitesC($activitescomps[$i][0], $activitescomps[$i][1], $activitescomps[$i][2],$activitescomps[$i][3],$activitescomps[$i][4],$activitescomps[$i][5],$activitescomps[$i][6],$activitescomps[$i][7]);
                    $ensactivitescomp[$activitescomp->getIdActivite()] = $activitescomp;
                }
            }
            
            return $ensactivitescomp;


    }










