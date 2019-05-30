<?php


use App\Metier;


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

    private $libelle;
    private $description;

    /**
     * Permet d'instancier un effet
     * @param string $libelle son libellé
     * @param string $description sa description
     */
    public function __construct($libelleEffet,$descriptionEffet)
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