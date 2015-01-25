<?php

/*
identifiant VARCHAR,
motDePassse VARCHAR,
etat VARCHAR
nom VARCHAR
*/
class Parent
{
    //ATTRIBUT DE PARENT
      private $identifiant;
      private $motDePasse;
      private $etat;
      private $nom;
      
      //CONSTUCTEUR DE PARENT
        public Parent($identifiant,$motDePasse,$etat,$nom)
      {
          $this->identifiant=$identifiant;
          $this->motDePasse=$motDePasse;
          $this->etat=$etat;
          $this->nom=$nom;
      }
      
      //GETTER
      
         public function get_identifiant()
        {
             return($this->identifiant);
         }
         public function get_motDePasse()
         {
                 return($this->motDePasse);
         }
         public function get_etat()
         {
             return($this->etat);
         }
         public function get_nom()
         {
             return($this->nom);
         }
         //SETTER
         public function set_identifiant($identifiant)
        {
             $this->identifiant=$identifiant;
         }
         public function set_motDePasse($motDePasse)
         {
            $this->motDePassse=$motDePasse,     
         }
         public function set_etat($etat)
         {
             $this->etat=$etat;
         }
         public function set_nom($nom)
         {
            $this->nom=$nom;
         }
         
         
}

?>