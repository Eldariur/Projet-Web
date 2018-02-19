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
    <h1>Évenements :</h1>
   	
    
    <br/><br/><br/><br/>
    <p><strong>Soon tm</strong></p>

    <footer><p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale.</p></footer>


   </body>
</html>
