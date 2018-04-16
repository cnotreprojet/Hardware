<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
		<meta charset="utf-8" />
	<link rel="stylesheet" href="Style/style.css" />
</head>
<body>
<?php include('nav.php'); ?>
<div class="conteneur"> 	
<h2>Inscription </h2>
	<form method="POST" action="">
		<div class="elementAligner">
				<label>Pseudo : </label> <input type="text" name="pseudo" required> 
				<label>Mot de Passe : </label> <input type="password" name="password" required> 		
				<label> Adresse mail : </label> <input type="email" name="mail" required>
				<p>Adresse :  </p>
				<label>Nom : </label> <input type="text" name="nom" required> 
				<label>Prenom : </label> <input type="text" name="prenom" required> 
				<label>Ville : </label> <input type="text" name="ville" required> 
				<label>Rue : </label> <input type="text" name="rue" required> 
				<label>Numero de rue : </label> <input type="number" name="number_rue" required> 
		<input type="submit" name="envoyer">
		</div>
	</form>	
<?php
if(!empty($_POST['pseudo'])) {
	$connexion = mysqli_connect("localhost","root","","hardware");
	//&& isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['ville']) && isset($_POST['rue']) && isset($_POST['nb_rue'])
	if(mysqli_connect_error() ) {
		printf("Echec de la connection : %s \n",mysqli_connect_error());
		exit(); 
	}
	else {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mdp = htmlspecialchars($_POST['password']);
		$mail =  htmlspecialchars($_POST['mail']);
		$nom =  htmlspecialchars($_POST['nom']);
		$prenom =  htmlspecialchars($_POST['prenom']);
		$ville =  htmlspecialchars($_POST['ville']);
		$rue =  htmlspecialchars($_POST['rue']);
		$number_rue =  htmlspecialchars($_POST['number_rue']);
		//$requete = "INSERT INTO user VALUES($pseudo','$mdp','$mail','$nom','$prenom','$ville','$rue','$number_rue')";
		$name = "SELECT pseudo FROM user WHERE pseudo = $pseudo";
		$similude = mysqli_query($connexion,$name);
		var_dump($similude);
		if($similude){
			echo "similude = $similude <br>";
			echo "Ce pseudo est déja prit. <br>";
		}
		else {
			$sql ="INSERT INTO user (pseudo, password,mail, nom,prenom,ville,rue,nb_rue) VALUES ('$pseudo','$mdp','$mail','$nom','$prenom','$ville','$rue','$number_rue')";
			$res = mysqli_query($connexion,$sql);
			echo " $res <br> $sql";
			mysqli_close($connexion);
			echo "<p> Merci de votre inscription $pseudo </p>";
 			//header('Location:acceuil.php');
		}
 			
		}
	
}

?>
</div>	
<?php include('footer.html'); ?>
</body>
</html>