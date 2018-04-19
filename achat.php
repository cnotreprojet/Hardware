<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Achat</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Style/style.css" />
</head>
<body>
	<?php include('nav.php'); ?>
	<div class="conteneur">
	<?php
	if($_SESSION['connexion'] == 1) {	
		/*Verification de la connexion*/
		$connexion = mysqli_connect("localhost","root","","hardware");

		if(mysqli_connect_error()){
		printf("Echec de la connection : %s \n",mysqli_connect_error());
			exit(); 
		}
		$requete = "SELECT * FROM produit";
		$res = mysqli_query($connexion,$requete);
		//var_dump($res);
		while($produit = mysqli_fetch_array($res,MYSQLI_BOTH)){
			//echo"{$produit['id']} <br>";
			echo "<hr/>";
			echo"{$produit['name']} <br>";
			echo"{$produit['titre']} <br>";
			echo"{$produit['description']} <br>";
		}
		mysqli_close($connexion);
	}
	else {
		echo "Veuiller vous inscrire ou vous connecter";
	}
	?>
	</div>
<?php include('footer.html'); ?>
</body>
</html>
