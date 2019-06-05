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


class Region
{

    private $id;
    private $nom;


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