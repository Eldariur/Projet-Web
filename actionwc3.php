<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Identification ASIMOV</title>
    <link href="monstyle.css" rel="stylesheet" media="all">
</head>

<body>
	
	
	<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=l2info;charset=utf8', 'l2infoetu', 'webdyn72',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	?>

	<?php
	
	
		
		
		
		
	//Entrée des données dans la table
	$req = $bdd->prepare('INSERT INTO eventwc3(nom,date,activite,nourriture,majeur,activite2)VALUES(:nom,:date,:activite,:nourriture,:majeur,:activite2)');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'date' => $_POST['date'],
		'activite' => $_POST['Tournoi'],
		'nourriture' => $_POST['nourriture'],
		'majeur' => $_POST['majeur'],
		'activite2' => $_POST['SessionFun']
	));
	$req->closeCursor();
	


	if($_POST['majeur'] == "Non")
	{
	?>
	<p>Sachant que vous êtes mineur, veillez à apporter ce certificat :</p>
	<br>
	<object data="http://info.univ-lemans.fr/~l2info012/AutorisationParentale.pdf" type="application/pdf" width="600" height="800">
    	</object>

	<?php
	}
	
	?>
	
	<br>
	
	<p>Le prix à payer sera de : 
	<?php
	if($_POST['Tournoi'])
	{
	?>
	<p>8€</p>
	<?php
	}
		
	?>
	<p>Vous vous êtes bien inscrit à l'événement Warcraft 3!</p>
	

	
	<br>
	
	<br>
	<p><a href="EVENTWC3.php"> Cliquez ici</a> pour revenir à la page de l'événement.</p>
	
</body>

</html>