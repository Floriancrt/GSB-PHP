<?php


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


class ActivitesC
{
    private $numero;
    private $etat;
    private $budget;
    private $salle;
    private $commentaires;
    private $idActivite;
    private $id;
    private $date;


    public function __construct($Etat,$Budget,$Salle,$Commentaires,$Date)
    {
        $this->
        $this->etat = $Etat;
        $this->budget = $Budget;
        $this->salle = $Salle;
        $this->commentaires = $Commentaires;
        $this->date = $Date;
        
    }

    public function GetEtat()
    {
        return $this->etat;
    }

    public function GetBudget()
    {
        return $this->budget;

    }

    public function GetSalle()
    {
        return $this->salle;
    }

    public function GetCommentaires()
    {
        return $this->commentaires;

    }

    public function GetDate()
    {
        return $this->date;
    }








}