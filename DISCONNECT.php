<!DOCTYPE html>
<html>
   <head>

    	<meta charset="UTF-8">
    	<title></title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
   </head>

   <body>

    
   	
    <?php
    session_start();
    $_SESSION=array();
    session_destroy();
    ?>
    <p>Vous vous êtes déconnecté.</p>
    <br/><br/><br/>
    <p><a href="INDEX.php">Retournez sur la page principale.</a></p>






   </body>
</html>
