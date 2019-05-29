<?php

/**
 * 
 * Représente les activités complémentaires
 * 
 * @author COURTHIEU Florian
 */

/**
 * 
 * Ensemble des attributs concernants la table activites
 * 
 */


class Activite
{

    private $id;
    private $bilan;
    private $date;

    public function __construct()
    {
        $nbArgs = func_num_args();        
        $args = func_get_args();
        switch($nbArgs)
        {
            // insertion
            case 2:
                $this->date = $args[0];
                $this->visiteur = $args[1];
                break;
            // sélection
            case 4:
                $this->id = $args[0];
                $this->date = $args[1];
                $this->bilan = $args[2];
                $this->visiteur = $args[3];
                break;
        }
    }

    /**
     * Permet d'obtenir l'identifiant de l'activité.
     * @return string l'id
     */
    public function getId()
    { 
        return $this->id; 
    }
    /**
     * Permet d'obtenir la date de l'activité.
     * @return string la date
     */
    public function getDate()
    {
        return $this->date; 
    }
    /**
     * Permet d'obtenir le bilan de l'activité.
     * @return string le bilan
     */
    public function getBilan()
    { 
        return $this->bilan;
    }
    


}