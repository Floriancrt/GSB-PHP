<?php


/**
 *
 * Représente les médicaments
 * 
 * @author COURTHIEU Florian
 */

 /**
  *  Ensemble des attributs concernant la table Medicament
  *
  */

class Medicament
{
    private $numero;
    private $libelle;
    private $famille;

    /**
     * Permet d'instancier un médicament
     * @param string $numero son numero
     * @param string $libelle son libelle
     * @param string $famille sa famille
     */
    public function __construct($numero, $libelle,$famille)
    {
        $this->numero = $numero;
        $this->libelle = $libelle;
        $this->famille = $famille;
    }

    public function getNumero()
    {
        return $this->numero;

    }

    public function getLibelle()
    {
        return $this->libelle;
        
    }

    public function getFamille()
    {

        return $this->famille;
    }


}