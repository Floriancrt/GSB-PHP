<?php


/**
 * 
 * Représente les Effets de chaque Médicament
 * 
 * @author COURTHIEU Florian
 */

 /**
  * 
  * Ensemble des attributs concernant la table Effets
  * 
  */


 class Effets
 {


    private $libelleEffet;
    private $descriptionEffet;

    public function __construct($libelleEffet,$descriptionEffet)
    {
        $this->libelleEffet = $libelleEffet;
        $this->descriptionEffet = $descriptionEffet;
        
    }
    

    public function getLibelleEffet()
    {
        return $this->libelleEffet;
    }

    public function getDescriptionEffet()
    {
        return $this->descriptionEffet;
    }


 }


 ?>