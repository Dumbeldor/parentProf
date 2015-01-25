<?php

    function chargerClasse($classe)
    {
      require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
    } 
    
    
    spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée. */
   //<--------------------------------------------------------------------------------------->
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "c9";


    $data= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // set the PDO error mode to exception
    echo "test";
    $test = new AdministrateurManager($data);
    
    
    $admintest = new Administrateur('totdzde','hi','che');
    
    //($classe,$parents,$professeurs,$heureDeDebut,$heureDeFin,$dates)
   //$testReunion = new Reunion('quatrieme','Dupont','Coline','17H00','18H00','10/10/2014');
    //__construct($classe,$parents,$professeurs,$heureDeDebut,$heureDeFin,$dates)
    
    echo "test Administrateur";
    /*getMysqlConnexionWithPDO(); 
    getMysqlConnexionWithMySQLi();*/
 //  $reuniiion = new ReunionManager($bd);
   //echo "test reunion";
    
    //$ReunionManager = new ReunionManaager($db);
    
    echo"test Manager"; //NE MARCHE PAS PUTAIN
    
    
    $test->add($admintest);
    // use exec() because no results are returned
 


 
    
    
?>