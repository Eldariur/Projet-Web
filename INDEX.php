<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title>Espace Membre ASIMOV</title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
   </head>

   <body>

    <header>
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
    <?php
    
    if(isset($_SESSION['id']) AND isset($_SESSION['name']))
    {
    ?>
      <div class="disconnect"><p><a href="DISCONNECT.php">Se déconnecter</a></p></div>
    <?php
    }

    ?>

		<legend><center>Espace Membre ASIMOV</center></legend>
    <br/><br/><br/><br/>

    <h1>Bienvenue sur l'espace membre ASIMOV </h1>
    <br/><br/><br/>
    <?php
    
    if(!isset($_SESSION['id']) AND !isset($_SESSION['name']))
    {
    ?>
	<br><br><br>

	<p>
	Evénements :
	 
	</p>
	<br>
	<p>
	Tournoi StarCraft 2 	
	</p>
<br>
	<p>
	LAN : Warcraft 3	
	</p>
	



	<br><br><br>
      <p>Créez un compte et connectez vous pour pouvoir vous inscrire aux <strong>Évenements</strong>.</p>
    <?php
    }

    ?>
    
    <?php
    
    if(isset($_SESSION['id']) AND isset($_SESSION['name']))
    {
      echo 'Salut ' . $_SESSION['name'];


    ?>
	
    <br/><br/><br/><br/>
    <p>Cliquez <a href="EVENT.php">ici</a> pour vous inscrire à un événement</p>

    <?php

    }

    ?>




   </body>
</html>
