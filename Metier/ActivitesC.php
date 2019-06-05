<?php


require_once "../Metier/Activites.php";
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


class ActivitesC extends Activites
{
    private $budget;
    private $theme;
    private $salle;
    private $etat;
    private $idResponsable;


    /**
     * Permet d'instancier une activité complémentaire
     * @param string $budget son budget
     * @param string $theme son theme
     * @param string $salle sa salle
     * @param string $etat son etat
     * @param string $colPraticiens les praticiens concernés
     */
    public function __construct($idActivite,$date,$bilan,$idResponsable,$budget,$etat,$salle,$theme)
    {
      parent::__construct($idActivite,$date,$bilan); 
      $this->idResponsable = $idResponsable;
      $this->budget = $budget;
      $this->etat = $etat;
      $this->salle = $salle;
      $this->theme = $theme;
            
        
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
    public function getIdResponsable()
    { 
        return $this->idResponsable; 
    }


}



