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

	
	
	$req = $bdd->prepare('SELECT id,pass,email,name FROM account WHERE email = :email ');
	$req->execute(array(
		'email' => $_POST['email']
		
	));
	
	$resultat = $req->fetch();
	if(password_verify($_POST['pass'],$resultat['pass'])){
		
		session_start();
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['email'] =$resultat['email'];
		$_SESSION['name']=$resultat['name'];
	?>
	<br/><br/><br/>
	<p>Vous vous êtes connecté avec succès !</p>
	
	<br/><br/><br/>
	<p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale !</p>	
	<?php
	}
	else{
	?>	
	<p>Adresse ou mot de passe incorrect</p>
	<?php
	}
	$req->closeCursor();

	?>



</body>

</html>