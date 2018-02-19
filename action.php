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

	//Mettre la condition disponibilité e-mail

	$hach_pass = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

	$req = $bdd->prepare('INSERT INTO account(email,pass,fname,name,promotion)VALUES(:email,:pass,:fname,:name,:promotion) ');
	$req->execute(array(
		'email' => $_POST['adresse'],
		'pass' => $hach_pass,
		'fname' => $_POST['nom'],
		'name' => $_POST['prenom'],
		'promotion' => $_POST['promotion']
	));


	?>
	<p>Vous vous êtes bien inscrit <?php echo htmlspecialchars($_POST['prenom']); ?> .</p>
	<p>Cliquez <a href="LOGIN.php">ici</a> pour vous log</p>
</body>

</html>