<?php


/**
 * 
 * Représente les composants de chaque Médicament
 * 
 * @author COURTHIEU Florian
 */

 /**
  * 
  * Ensemble des attributs concernant la table contreindications
  * 
  */


class Composants
{

    
    private $LibelleComposant;
    private $Quantite;


    public function __construct($LibelleComposant,$Quantite)
    {

        $this->LibelleComposant = $LibelleComposant;
        $this->Quantite = $Quantite;
    }

    public function getQuantite()
    {
        return $this->Quantite;
    }

    public function getLibelleComposant()
    {

        return $this->LibelleComposant;
    }

    

}


?>