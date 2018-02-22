<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title>Evenement WC3</title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
	
	<script src="gen_validatorv4.js" ></script>
	
   </head>

   <body>

    <header>
      <?php
      session_start();
      if(isset($_SESSION['id']) AND isset($_SESSION['name']))
      {
      ?>
      <div class="disconnect"><p><a href="DISCONNECT.php">Se déconnecter</a></p></div>
      <?php  
      }
      ?>
    </header>
    <!-- Declaration des variables pour les places disponibles/restantes -->
    <?php
    try{
      $bdd = new PDO('mysql:host=localhost;dbname=l2info;charset=utf8', 'l2infoetu', 'webdyn72',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e){
      die('Erreur : ' . $e->getMessage());
    } 

    $req = $bdd->query('SELECT COUNT(id) as places FROM eventwc3');
    $places = $req->fetch();
    $req->closeCursor();
    $dispo = 16;
    ?>
		
    <br/><br/><br/><br/>
    
    <br/><br/><br/><br/>
    <h1>Événement Warcraft 3</h1>
   	
    
    <br/><br/><br/>
    <h2>LAN ouverte sur Warcraft 3 !</h2>
    <br>
    <p>Chaque semaine, l'événement revient avec son lot d'activités qui mettent en avant le fun et la competition sur un jeu d'anthologie !</p>
    <br>
    <p>Infos de l'événement :<p>
	<ul>
	<li>Plats disponibles sur place</li>
        <li>Vous choisissez une date pour participer à une soirée</li>
	<li>Chaque soirée comporte 2 activités : un tournoi de 1 contre 1 et des sessions de jeu fun sur différents modules du jeu</li>
	<li>Le tournoi possède un cashprize de 100€ </li>
	<li>Participer au tournoi coûtera 8€ </li>	
	</ul>

    <br>
    <!-- Affichage du nombre de places disponibles -->
    <p>Places disponibles : 
    <?php 
    
    $reste = $dispo - $places['places'];
    echo $reste;

    ?>
    </p>


    <!-- Formulaire d'inscription à l'événement-->
    <form id='Register' method="post" action="actionwc3.php">
          <h3>S'inscrire à l'événement Warcraft 3</h3>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Votre nom:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="nom" 
              placeholder="Ecrivez ici">
            </div>
          </div><br/>
        
        

            <p>

                  Souhaitez-vous ramener vous-même votre nourriture ?<br />

                  <input type="radio" name="nourriture" value="Oui"  /> <label >Oui</label><br />

                  <input type="radio" name="nourriture" value="Non"  /> <label >Non</label><br />
            </p>
            <br>
            <p>

                  Avez-vous plus de 18 ans ?<br />

                  <input type="radio" name="majeur" value="Oui"  /> <label >Oui</label><br />

                  <input type="radio" name="majeur" value="Non"  /> <label >Non</label><br />
            </p>
            <br>
	    <p>Choisissez une date de soirée à participer :</p>
            <input type="date" name="date">
            <br>
	    <p>

                  Voulez-vous participer au Tournoi ?<br />

                  <input type="radio" name="Tournoi" value="Oui"  /> <label >Oui</label><br />

                  <input type="radio" name="Tournoi" value="Non"  /> <label >Non</label><br />
            </p>
	    <br>
	    <p>

                  Voulez-vous participer à la session fun ?<br />

                  <input type="radio" name="SessionFun" value="Oui"  /> <label >Oui</label><br />

                  <input type="radio" name="SessionFun" value="Non"  /> <label >Non</label><br />
            </p>
	    

        
        <br/><br/><button type="submit" name="submit" class="btn btn-primary">
        S'inscrire </button> 
        </form>

    
	


    <footer><p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale.</p></footer>
	<script >
               var frmvalidator = new Validator("Register");
               //Nom équipe validator
               frmvalidator.addValidation("nom","req","Vous devez entrer votre nom");
        </script>


   </body>
</html>
