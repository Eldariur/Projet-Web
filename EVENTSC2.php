<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title></title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
   </head>

   <body>

    <header>
      <div class="disconnect"><p><a href="DISCONNECT.php">Se déconnecter</a></p></div>
    </header>
		<legend><center>Espace Évenements ASIMOV</center></legend>
    <br/><br/><br/><br/>
    <?php
    session_start();
    if(isset($_SESSION['id']) AND isset($_SESSION['name']))
    {
      echo 'Salut ' . $_SESSION['name'];
    }
    ?>
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
      <li>Matchs en 1 contre 1</li>
      <li>Format de match standard (aucun module activé)</li>
      <li>Evenement sur 2 jours (du 26 au matin jusqu'au 27 au soir)</li>
      <li>Nourriture disponible en commande</li>

    </ul>

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

                  <input type="radio" name="nourriture" value="Oui" id="Oui" /> <label for="Oui">Oui</label><br />

                  <input type="radio" name="nourriture" value="Non" id="Non" /> <label for="Non">Non</label><br />
            </p>
            <br>
            <p>

                  Avez-vous plus de 18 ans ?<br />

                  <input type="radio" name="majeur" value="Oui" id="Oui" /> <label for="Oui">Oui</label><br />

                  <input type="radio" name="majeur" value="Non" id="Non" /> <label for="Non">Non</label><br />
            </p>
            <br>
            <p>

                  Êtes-vous membre ASIMOV ?<br />

                  <input type="radio" name="membre" value="Oui" id="Oui" /> <label for="Oui">Oui</label><br />

                  <input type="radio" name="membre" value="Non" id="Non" /> <label for="Non">Non</label><br />
            </p>
            <br>
          

        
        <br/><br/><button type="submit" name="submit" class="btn btn-primary">
        S'inscrire </button> 
        </form>



    <footer><p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale.</p></footer>


   </body>
</html>
