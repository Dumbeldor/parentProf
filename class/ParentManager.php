 <?php
 class ParentManager
 {
    private $_db;

    public function  __construct($db)
	  {
	    $this->setDb($db);
	  }
	  
	  public function add(Parent $parent){
            
            $q = $this->_db->prepare('INSERT INTO Parent SET identifiant = :identifiant, motDePasse = :motDePasse, nom = :nom');
            
            $q->bindValue(':identifiant', $parent->get_identifiant(),PDO::PARAM_STR);
            
            $q->bindValue(':motDePasse', $parent->get_motDePasse(),PDO::PARAM_STR);
            
            $q->bindValue(':nom', $parent->get_nom(),PDO::PARAM_STR);
    
            $q->execute();
		}
}