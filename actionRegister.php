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
	$email = $_POST['adresse'];

	// condition disponibilité e-mail
	$req2 = $bdd->prepare('SELECT email FROM account WHERE email=:email');
	$req2->execute(array(
		'email' => $email
	));
	$verif = $req2->fetch();
	if($email = $verif['email'])
	{
	?>	
	<p>Adresse déjà utilisée</p>
	<p><a href="REGISTER.php">Réessayez</a> l'inscription</p>

	<?php
	}
	else{
		
		
		//Hachage du MDP
		$hach_pass = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
		//Entrée des données dans la table
		$req = $bdd->prepare('INSERT INTO account(email,pass,fname,name,promotion)VALUES(:email,:pass,:fname,:name,:promotion) ');
		$req->execute(array(
			'email' => $email,
			'pass' => $hach_pass,
			'fname' => $_POST['nom'],
			'name' => $_POST['prenom'],
			'promotion' => $_POST['promotion']
		));


	?>
	
	<p>Vous vous êtes bien inscrit <?php echo htmlspecialchars($_POST['prenom']); ?> .</p>
	
	<?php
	}
	?>
	
	<p>Cliquez <a href="LOGIN.php">ici</a> pour vous log</p>
</body>

</html>