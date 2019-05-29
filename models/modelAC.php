<?php


function afficherAC($numero)
{
    $wsdl = "http://localhost:8080/WebService1.asmx?WSDL";

    $client = new SoapClient($wsdl);
    $res = $client->afficherAC();
        $res = $res->afficherACResult;
        $ac = array();
        $ensAC = array();
        // l'exécution de la méthode renvoie au moins un résultat
        if( count((array) $res) > 0 )
        {
            $res = $res->string;
            // plusieurs résultats
            if(is_array($res))
            {
                $nbRes = count($res);
                for($i = 0; $i < $nbRes; $i++)
                {
                    // le séparateur '|' permet de scinder chaque ligne en segments
                    // lesquels sont stockés dans un tableau
                    $ac[] = explode('|', $res[$i]);
                }
            }
            else
            {
                $ac[] = explode('|', $res); // idem
            }
            $nbRes = count($ac);
            
            // une activité complémentaire est instanciée et intégrée au dictionnaire
            // pour chaque ligne du tableau $ac
            for($i = 0; $i < $nbRes; $i++)
            {
                $id = $ac[$i][0]; // identifiant de l'activité complémentaire
                // chargement des participants
                $colPraticiens = self::getParticipants($id);
                $ensAC[$id] = new \App\Metier\ActiviteComplementaire($ac[$i][0], $ac[$i][1], $ac[$i][2], $ac[$i][3], $ac[$i][4], $ac[$i][5], $ac[$i][6], $ac[$i][7], $colPraticiens);
            }
        }
        return $ensAC;


}


