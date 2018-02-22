<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title>Evenement SC2</title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
      <script src="gen_validatorv4.js"></script>
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

    $req = $bdd->query('SELECT COUNT(id) as places FROM eventsc2');
    $places = $req->fetch();
    $req->closeCursor();
    $dispo = 16;
    ?>
		
    <br/><br/><br/><br/>
    
    <br/><br/><br/><br/>
    <h1>Événement StarCraft 2</h1>
   	
    
    <br/><br/><br/>
    <h2>ASIMOV annonce son premier tournoi StarCraft 2 !</h2>
    <br>
    <p>Venez faire chauffer vos APM et menez vos armées à la victoire dans ce tournoi 1v1 en équipe.</p>
    <br>
    <p>Date de l'événement : 26 Mai 2018</p>
    <br>
    <p>Infos du tournoi :</p>
    <br>
    <ul>
      <li>Equipes de 3 personnes</li>
      <li>16 equipes</li>
      <li>Matchs en 1 contre 1</li>
      <li>Format de match standard (aucun module activé)</li>
      <li>Evenement sur 2 jours (du 26 au matin jusqu'au 27 au soir)</li>
      <li>Nourriture disponible en commande</li>
      <li>Prix de l'inscription : 10€(Non membre) 5€(Membre)</li>
      

    </ul>
    <br>

    <p>Equipes inscrites : <br>
    <!-- Affichage du nom des équipes inscrites -->
    <?php 
    
    $req = $bdd->query('SELECT equipe FROM eventsc2');
    
    while($equipes = $req->fetch())
    {
      echo $equipes['equipe']. '<br>';
    }  
    ?>
      
    </p>
    
    <br>
    <!-- Affichage du nombre de places disponibles -->
    <p>Places disponibles : 
    <?php 
    
    $reste = $dispo - $places['places'];
    echo $reste;

    ?>
    </p>


    <!-- Formulaire d'inscription à l'événement-->
    <form id='Register' method="post" action="actionsc2.php">
          <h3>S'inscrire à l'événement StarCraft 2</h3>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Nom de l'équipe</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="equipe" 
              placeholder="Ecrivez ici">
            </div>
          </div><br/>
        
        

            <p>

                  Souhaitez-vous ramener vous-même votre nourriture ?<br />

                  <input type="radio" name="nourriture" value="Oui" /> <label >Oui</label><br />

                  <input type="radio" name="nourriture" value="Non" /> <label >Non</label><br />
            </p>
            <br>
            <p>

                  Avez-vous plus de 18 ans ?<br />

                  <input type="radio" name="majeur" value="Oui"  /> <label >Oui</label><br />

                  <input type="radio" name="majeur" value="Non"  /> <label >Non</label><br />
            </p>
            <br>
            <p>

                  Êtes-vous membre ASIMOV ?<br />

                  <input type="radio" name="membre" value="Oui"  /> <label >Oui</label><br />

                  <input type="radio" name="membre" value="Non"  /> <label>Non</label><br />
            </p>
            <br>
          

        
        <br/><br/><button type="submit" name="submit" class="btn btn-primary">
        S'inscrire </button> 
        </form>



    <footer><p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale.</p></footer>
    <script>
               var frmvalidator = new Validator("Register");
               //Nom équipe validator
               frmvalidator.addValidation("equipe","req","Vous devez entrer un nom d'équipe");
    </script>

   </body>
</html>
