<?php



namespace App\Metier;


/**
 * 
 * Représente les activités complémentaires
 * 
 * @author COURTHIEU Florian
 */

/**
 * 
 * Ensemble des attributs concernants la table activitescomp
 * 
 */


class ActivitesC extends Activite
{
    private $budget;
    private $theme;
    private $salle;
    private $etat;
    private $colPraticiens;


    /**
     * Permet d'instancier une activité complémentaire
     * @param string $budget son budget
     * @param string $theme son theme
     * @param string $salle sa salle
     * @param string $etat son etat
     * @param string $colPraticiens les praticiens concernés
     */
    public function __construct()
    {
        $nbArgs = func_num_args();        
        $args = func_get_args();
        switch($nbArgs)
        {
            // insertion
            case 2:
                parent::__construct($args[0], $args[1]);
                $this->theme = $args[2];
                $this->salle = $args[3];
                break;
            // sélection
            case 9:
                parent::__construct($args[0], $args[1], $args[2], $args[3]);
                $this->budget = $args[4];
                $this->theme = $args[5];
                $this->salle = $args[6];
                $this->etat = $args[7];
                $this->colPraticiens = $args[8];
                break;
        }
    }
    
    /**
     * Permet d'obtenir le budget de l'activité complémentaire.
     * @return string le budget
     */
    public function getBudget()
    { 
        return $this->budget; 
    }

    /**
     * Permet d'obtenir le thème de l'activité complémentaire.
     * @return string le thème
     */
    public function getTheme()
    {
        return $this->theme; 
    }

    /**
     * Permet d'obtenir la salle de l'activité complémentaire.
     * @return string la salle
     */
    public function getSalle()
    {
        return $this->salle; 
    }

    /**
     * Permet d'obtenir l'état de l'activité complémentaire.
     * @return string l'état
     */
    public function getEtat()
    { 
        return $this->etat; 
    }

    /**
     * Permet d'obtenir les praticiens participant à l'activité complémentaire.
     * @return array les praticiens
     */
    public function getPraticiens()
    { 
        return $this->colPraticiens; 
    }


}



