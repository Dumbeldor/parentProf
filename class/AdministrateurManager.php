<?php

class AdministrateurManager
{
    private $_db;


    public function  __construct($db)
    {
        $this->setDb($db);
    }
   
    public function setDb(PDO $db){
        $this->_db = $db;
    }

    // Ajouter un administrateur
    public function add(Administrateur $admin)
    {
        $q = $this->_db->prepare('INSERT INTO Administrateur(identifiant,motDePasse,niveauDeDroit) Values (:identifiant,:motDePasse,:niveauDeDroit)');
        
        
        $q->bindValue(':identifiant', $admin->get_identifiant());
        
        $q->bindValue(':motDePasse', $admin->get_motDePasse());
        
        $q->bindValue(':niveauDeDroit', $admin->get_niveauDeDroit());
        
        $q->execute();
       
    }
    
    // Supprimer un Administrateur
        public function delete(Administrateur $admin)
        {
            $this->_db->exec('DELETE FROM Administrateur WHERE idAdministrateur = '.$admin->get_id());
        }
    
    //DECLARATION ET DEFINITION DES METHODES
    
    
            
        }
        

    

?>