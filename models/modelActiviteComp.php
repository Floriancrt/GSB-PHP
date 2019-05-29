<?php




class ActivitesComp
{

    /**
     * Permet d'obtenir les participants d'une activité complémentaire.
     * @param string $id identifiant de l'activité complémentaire
     * @return array les participants
     */
    public static function getParticipants($id)
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
    public static function afficherAC($numero)
    {
        $wsdl = "http://localhost:8080/WebService1.asmx?WSDL";

        $client = new SoapClient($wsdl);
        $res = $client->afficherAC();
        $res = $res->afficherACResult;
        $ac = array();
        $ensAC = array();
    
        if( count((array) $res) > 0 )
        {
            $res = $res->string;
        
            if(is_array($res))
            {
                $nbRes = count($res);
                for($i = 0; $i < $nbRes; $i++)
                {
                
                    $ac[] = explode('|', $res[$i]);
                }
            }
            else
            {
                $ac[] = explode('|', $res); // idem
            }
            $nbRes = count($ac);
            
            
            for($i = 0; $i < $nbRes; $i++)
            {
                $id = $ac[$i][0]; 
                $colPraticiens = self::getParticipants($id);
                $ensAC[$id] = new ActivitesC($ac[$i][0], $ac[$i][1], $ac[$i][2], $ac[$i][3], $ac[$i][4], $ac[$i][5], $ac[$i][6], $ac[$i][7], $colPraticiens);
            }
        }
        return $ensAC;


    }






}



