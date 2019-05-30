<?php




namespace App\Metier;

/**
 *
 * Représente le personnel
 * 
 * @author COURTHIEU Florian
 */

 /**
  *  Ensemble des attributs concernant la table Personnel
  *
  */


class Region
{

    private $id;
    private $nom;

    /**
     * Permet d'instancier un effet
     * @param string $id son identifiant
     * @param string $nom son nom
     */
    public function __contruct($id,$nom)
    {
        $this->id = $id;
        $this->nom = $nom;

    }

    public function getId()
    {
        return $this->id;

    }

    public function getNom()
    {
        return $this->nom;
    }



}