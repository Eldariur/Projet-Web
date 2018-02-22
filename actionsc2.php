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
	// condition disponibilité nom equipe
	$req1 = $bdd->prepare('SELECT equipe FROM eventsc2 WHERE equipe=:equipe');
	$req1->execute(array(
		'equipe' => $_POST['equipe']
	));
	
	$verif = $req1->fetch();
	$req1->closeCursor();
	
	if($verif['equipe'])
	{
	
	?>	
	<p>Nom d'équipe déjà utilisé</p>
	<p><a href="EVENTSC2.php">Réessayez</a> l'inscription</p>


	<?php
		
	}
	else{
		
		
		
		
		//Entrée des données dans la table
		$req = $bdd->prepare('INSERT INTO eventsc2(equipe,bouffe,majeur,membre)VALUES(:equipe,:bouffe,:majeur,:membre)');
		$req->execute(array(
			'equipe' => $_POST['equipe'],
			'bouffe' => $_POST['nourriture'],
			'majeur' => $_POST['majeur'],
			'membre' => $_POST['membre']
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
		if($_POST['membre'] == "Non")
		{
	?>
		<p>10€ (T'aurais du être membre)</p>
	<?php
		}
		elseif ($_POST['membre'] == "Oui") {
	?>
		<p>5€</p>
	<?php	
		}
	?>
		<p>Vous vous êtes bien inscrit à l'événement StarCraft 2 !</p>
	<?php


	}
	?>

	
	<br>
	
	<br>
	<p><a href="EVENTSC2.php"> Cliquez ici</a> pour revenir à la page de l'événement.</p>
	
</body>

</html>