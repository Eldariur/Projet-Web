<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title>Identification ASIMOV</title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
   </head>

   <body>
		<header><div class="headlog"><p><a href="REGISTER.php">S'inscrire</a></p></div></header>
   		<form method="post" action="connect.php">

    		<legend><center>Connexion à l'espace membre ASIMOV</center></legend>

    			<div class="form-group">
      			<label class="col-lg-2 control-label">Adresse e-mail</label>
      				<div class="col-lg-10">
        				<input type="text" class="form-control" name="email" placeholder="Entrez login">
      				</div>
    			</div><br/><br/><br/>

    			<div class="form-group">
     			<label class="col-lg-2 control-label">Mot de passe</label>
      				<div class="col-lg-10">
        				<input type="password" class="form-control" name="pass" placeholder="Entrez mdp">
      				</div>
    			</div>

			 <br/><br/><center><button type="submit" name="submit" class="btn btn-primary">Se connecter
			 </button></center>
	   	</form><br/><br/>
		
		<footer><p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale.</p></footer>



   </body>
</html>
