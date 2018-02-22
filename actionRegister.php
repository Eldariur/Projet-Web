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
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	
	

	// condition disponibilité e-mail
	$req1 = $bdd->prepare('SELECT email FROM account WHERE email=:email');
	$req1->execute(array(
		'email' => $_POST['adresse']
	));
	$verif = $req1->fetch();
	$req1->closeCursor();
	
	if($verif['email'])
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
		$req2 = $bdd->prepare('INSERT INTO account(email,pass,fname,name,promotion)VALUES(:email,:pass,:fname,:name,:promotion) ');
		$req2->execute(array(
			'email' => $_POST['adresse'],
			'pass' => $hach_pass,
			'fname' => $_POST['nom'],
			'name' => $_POST['prenom'],
			'promotion' => $_POST['promotion']
		));

		$req2->closeCursor();
	?>	
		<p>Vous vous êtes bien inscrit <?php echo htmlspecialchars($_POST['prenom']); ?> .</p>
	<?php	
	}
	
	?>
	
	
	
	
	
	
	<p>Cliquez <a href="LOGIN.php">ici</a> pour vous log</p>
</body>

</html>