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
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	

	

	$req = $bdd->prepare('INSERT INTO eventsc2(equipe,bouffe,mineur,membre)VALUES(:equipe,:bouffe,:mineur,:membre)');
	$req->execute(array(
		'equipe' => $_POST['equipe'],
		'bouffe' => $_POST['nourriture'],
		'mineur' => $_POST['majeur'],
		'membre' => $_POST['membre']
	));


	?>
	
	<p>Vous vous êtes bien inscrit à l'événement StarCraft 2 !</p>
	<p><a href="EVENTSC2.php"> Cliquez ici</a> pour revenir à la page de l'événement.</p>
</body>

</html>