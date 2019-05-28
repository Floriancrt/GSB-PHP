<?php


/**
 *
 * Représente les utilisateurs(Practiciens,Responsable de région, Visiteurs)
 * 
 * @author COURTHIEU Florian
 */

 /**
  *  Déclaration de l'Interface des utilisateurs
  *
  */

    interface IUtilisateurs
    {
        public function getLogin();
        public function getMdp();
        public function getEmail();
        public function getRole();

    }

