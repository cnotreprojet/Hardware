<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Style/style.css" />
	<title></title>
</head>
<body>
<nav>	
<ul>
	<li class="menu-html">
		<a href="acceuil.php" > Acceuil </a>
	</li>
	<li class="menu-html">
		<a href="hardware.php"> Composants </a>
		<ul class="sous_menu">
			<li> <a href="hardware.php#processeur">processeur</a></li>
			<li> <a href="hardware.php#carte_graphique">carte graphique</a></li>
			<li> <a href="hardware.php#alimentation">Alimentation</a></li>
			<li> <a href="hardware.php#carte_mere">Carte mére</a></li>
			<li> <a href="hardware.php#memoire">mémoire</a></li>
			<li> <a href="hardware.php#ram">Ram </a></li>
			<li> <a href="hardware.php#boitier">Boitier</a></li>
		</ul>
	</li>
	<li class="menu-html"> <a href="conseil.php" > Conseil </a>
	<?php
	if($_SESSION['connection'] == 1) {	 	
		echo "<li class="menu-html"><a href="achat.php" > Achat </a> </li>";
	}
	<li class="menu-html" ><a href="Vente.php" > Vente </a></li>
	<li class="menu-html"><a href="connexion.php" > Connexion </a> </li>
	<li class="menu-html"><a href="inscription.php" > inscription </a> </li> 
</ul>
</nav>
</body>
</html>

