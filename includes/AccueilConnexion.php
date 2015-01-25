<!DOCTYPE html>
<html>
<head>
	
	<!-- en tête de la page -->
    <meta charset="utf-8" />
    <!-- lier les page css de bootstrap -->
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css"> 
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css"> 
     <link rel="stylesheet" href="accueilConnexion.css" />
    
	<title>	Gestion de réunion parents-professeurs</title>
	
</head>
	
	
<body>

		<section>
				
			<div class="container">
				<header>
					<div class="row">
 						 <div class="col-md-12">

        						  <u><h2>Gestion de réunion parents-professeurs</h2></u><br/><br/><br/>
  						</div>
					</div>
				</header>
				<div class="row">
					<div class="col-md-4">
					</div>
						<div class="col-md-4">
							<div  class = "jumbotron" > 
	 							 <h2><u></u> Connexion </u></h2> 
	 							 <form method='post' action="traitement.php">
									<p1 text-align : center>
									<label for="Identifiant"> Identifiant </label> : <input type="text" name="identifiant" id ="identifiant" /><br/><br/>
									<label for="Mot de passe"> Mot de passe </label> : <input type="text" name="mdp" id ="mdp" /><br/><br/> 
									<input type="submit" name="action" value="Connexion"/>
									</p1>
								</form>
							</div>
						</div>
					<div class="col-md-4">
					</div>
					</div>
				</div>
			</div>
			
			</section>

<footer>

	<!-- Pied de page -->
	
</footer>
				
</body>

</html>