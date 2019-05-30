<?php



namespace App\Metier;


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

    
    private $libelle;
    private $Quantite;

    /**
     * Permet d'instancier un composant
     * @param string $libelle son libellé
     * @param string $quantite sa quantité
     */
    public function __construct($libelle,$quantite)
    {

        
        $this->libelle = $libelle;
        $this->Quantite = $Quantite;
    }

    /**
     * Permet d'obtenir la quantité d'un composant dans un médicament
     */
    
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Permet d'obtenir le libellé d'un composant
     */

    public function getLibelle()
    {

        return $this->libelle;
    }

    

}


?>