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

    /**
     * Permet d'obtenir la quantité d'un composant dans un médicament
     */
    
    public function getQuantite()
    {
        return $this->Quantite;
    }

    /**
     * Permet d'obtenir le libellé d'un composant
     */

    public function getLibelleComposant()
    {

        return $this->LibelleComposant;
    }

    

}


?>