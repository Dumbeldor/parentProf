<?php
class Administrateur {
	
  
        	
		private $identifiant;
		private $motDePasse;
		private $niveauDeDroit;
	

		// Constructeur
		public function __construct($identifiant,$motDePasse,$niveauDeDroit)
		{
		
			$this->identifiant = $identifiant;
			$this->motDePasse = $motDePasse;
			$this->niveauDeDroit = $niveauDeDroit; 
		}


		//GET ET SET

	

		
		//<------------------------------------------------->
		public function get_identifiant()
		{
			return $this->identifiant;
		}	
		public function set_identifiant($identifiant){
			if($identifiant >=0)
			{
				$this->identifiant = $identifiant;
			}
		}
		//<------------------------------------------------->
		public function get_motDePasse(){
			return $this->motDePasse;
		}

		public function set_motDePasse($mdp){	
			$this->motDePasse = $mdp;
		}
		//<------------------------------------------------->
		public function get_niveauDeDroit(){
			return $this->niveauDeDroit;
		}

		public function set_niveauDeDroit($droit){	
			$this->niveauDeDroit = $droit;
		}
		
}