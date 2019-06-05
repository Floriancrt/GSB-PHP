<?php


/**
 * 
 * Représente les contres-Indications de chaque Médicament
 * 
 * @author COURTHIEU Florian
 */

 /**
  * 
  * Ensemble des attributs concernant la table contreindications
  * 
  */


class Contre_Indications
{

    private $LibelleContreIndication;
    private $DescriptionContreIndication;


    public function __construct($LibelleContreIndication,$DescriptionContreIndication)
    {
        
        $this->libelleContreIndication = $LibelleContreIndication;
        $this->descriptionContreIndication = $DescriptionContreIndication;

    }


    public function getLibelleContreIndication()
    {

        return $this->libelleContreIndication;
    }

    public function getDescriptionContreIndication()
    {

        return $this->descriptionContreIndication;
    }
    

}


?>
















