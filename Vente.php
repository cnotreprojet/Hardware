<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="Style/style.css" />
	<title>Vente</title>
</head>
<body>
<?php
include('nav.php');	
?>
<div class="conteneur">
	<h1>Vendre</h1>
		<p> Vous avez acheter un nouveau pc et votre ancienne config ne vous est plus utile ? <br>
		vendez votre matériel composant ou setup complet ! </p>
		<p> Pour vendre sur notre site, il vous faut completer ce formulaire, merci d'y être le plus précis possible </p>
		
		<form method="post" action="">
				<fieldset>
		<legend> <h2>Poster une annonce </h2></legend>
			<div class="formulaire">
				<label> Titre de votre annonce :</label>	<input type="text" name="titreAnnonce"> <br> 
				<!--<label> Setup complet </label> <input type="radio" name="setup" value="complet"> <br>
				 Si l'utilisateur coche la case Setup Complet
				<textarea name="Setup" id="Setup" rows="20" ></textarea>
				-->
				<!--<label> compostant</label><input type="radio" name="setup" value="composant"> <br>
				Si l'utilisateur coche la case composant
				<form value="1" >
					<option>Disque Dur</option>
					<option>Carte graphique</option>
					<option>SSD</option>
					<option>Processeur</option>
					<option>Barrette de RAM</option>
					<option>Alimentation</option>
					<option>Carte mére</option>
				</form>
				-->
				<label> Prix (euros) : </label> <input type="text" name="prix"> <br>
				<label>Description </label> <br>
				<textarea name="Description" id="description" rows="13" ></textarea>
				
				<input type="submit" Value="Envoyer">
				<input type="reset" Value="Annuler">
			
		</fieldset>
	</form>
</div>
<?php include('footer.html'); ?>

</body>
</html>
