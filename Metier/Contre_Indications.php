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

    private $libelle;
    private $description;


    /**
     * Permet d'instancier une activité complémentaire
     * @param string $libelle son libellé
     * @param string $description sa description
     */
    public function __construct($libelle,$description)
    {
        
        $this->libelle = $libelle;
        $this->description = $description;

    }


    public function getLibelle()
    {

        return $this->libelle;
    }

    public function getDescription()
    {

        return $this->description;
    }
    

}


?>
















