<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Style/style.css" />
	<title>Connexion</title>
</head>
<body>
<?php include('nav.php') ?>
	<div class="conteneur">
		<form method="post" action="">
			<label>Pseudo : </label> <input type="text" name="pseudo"> <br/>
			<label>Mot de passe : </label> <input type="password" name="mdp"> <br/>
			<input type="submit" name="Connecter">
		</form>
	
<?php
$connexion = mysqli_connect("localhost","root","","hardware");
	if(mysqli_connect_error() ) {
		printf("Echec de la connection : %s \n",mysqli_connect_error());
		exit(); 
	}
	else {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mdp = htmlspecialchars($_POST['mdp']);
	}
	$res = "SELECT pseudo FROM user WHERE pseudo ='".$pseudo."' AND password ='".$mdp."' ";
	echo $res;
	$result = mysqli_query($connexion,$res);
	echo $result->num_rows;
?>
</div>
<?php include('footer.html') ?>
</body>
</html>