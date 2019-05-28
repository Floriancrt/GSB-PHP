<?php


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


class Personnel 
{

    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $dateEmbauche;
    private $colRegions;


    public function __contruct($id,$nom,$prenom,$adresse,$dateEmbauche,$colRegions)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->dateEmbauche = $dateEmbauche;
        $this->colRegions = $colRegions;

    }


    public function getId()
    {
        return $this->id;
    
    }

    public function getNom()
    {
        return $this->prenom;
    }

    public function getPrenom()
    {
        return $this->adresse;

    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;

    }

    public function getColRegions()
    {
        return $this->colRegions;

    }


}