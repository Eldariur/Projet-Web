<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title>Espace Membre ASIMOV</title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
   </head>

  <body>

    <header>
     <!-- Afficher les boutons S'inscrire et Se connecter aucune session n'est active--> 
    <?php
    session_start();
    if(!isset($_SESSION['id']) AND !isset($_SESSION['name']))
    {
    ?>
      <div class="headlog"><p><a href="REGISTER.php">S'inscrire</a><br/>
      <a href="LOGIN.php">Se connecter</a></p></div>
    <?php
    }

    ?>
    </header>
    <!-- Afficher le bouton Se déconnecter si un utilisateur est connecté-->
    <?php
    
    if(isset($_SESSION['id']) AND isset($_SESSION['name']))
    {
    ?>
      <div class="disconnect"><p><a href="DISCONNECT.php">Se déconnecter</a></p></div>
    <?php
    }

    ?>

		
    <br/><br/><br/><br/>

    <h1>Bienvenue sur l'espace membre ASIMOV </h1>
    <br/><br/><br/>
    
    
   
	 <br><br><br>

	 <p>
	 <strong>Evénements :</strong>
	 
	 </p>
	 <br>
	 <p>
	 <a href="EVENTSC2.php">Tournoi StarCraft 2</a> 
	 </p>
   <br>
	 <p>
	 <a href="EVENTWC3.php">LAN Warcraft 3</a>	
	 </p>
	
  </body>
</html>
