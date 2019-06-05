<?php


/**
 * 
 * Représente les activités 
 * 
 * @author COURTHIEU Florian
 */

 /**
  * 
  * Ensemble des attributs concernant la table activites
  * 
  */

  class Activites
  {
    private $idActivite;
    private $bilan;
    private $date;

    

    public function __construct($idActivite,$date,$bilan)
    {
        $this->idActivite = $idActivite;
        $this->date = $date;
        $this->bilan = $bilan;

    }
    

    public function getIdActivite()
    {

        return $this->idActivite;

    } 

    public function getBilan()
    {

        return $this->bilan;
        
    }

    public function getDate()
    {

        return $this->date;

    }




  }