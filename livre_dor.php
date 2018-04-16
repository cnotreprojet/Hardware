<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8" />
	<link rel="stylesheet" href="Style/style.css" />
	<title>Livre d'or</title>
</head>

<body>
	<?php include ('nav.php'); ?>		
<div class="conteneur">	
	<form method="post" action ="">
		<fieldset>
			<legend>Contact</legend>
		<label for="pseudo">Votre pseudo</label> : 
		<input type="text" name="pseudo" placeholder="Ex : gnou22"  maxlength="30">
		
		<label for="pseudo">Adresse mail (optionnel) </label> : 
		<input type="email" name="mail">
		
		<label for="message"></label><br />
	    <textarea name="message" id="message" rows="10" cols="50">
	    </textarea> <br>
	
		<input type="submit" name="Envoyer">
		
		</fieldset>
	</form>
</div>
<?php
// traitement du message et affichage du livre d'or
if(isset($_POST['pseudo']) && isset($_POST['message']) && ($_POST['message'] != '') && ($_POST['pseudo'] != '')) {  
$pseudo = (string) $_POST['pseudo']; // HtmlSpecialchar
$mail = (string) $_POST['mail']; // HtmlSpecialchar
$message = htmlspecialchars($_POST['message'],ENT_IGNORE) ;
$date = date('l jS \of F Y h:i:s A'); // Date du message
$fichier = fopen('livre_dor.text','a');
	if($fichier == false) {
		echo 'Erreur de traitement ';
		fclose($fichier);
	}
	else {
		if (fwrite($fichier,"$pseudo ; $message ; $mail ; $date \n") != false) {
			//<script> alert("Votre message a bien ete envoyer" </script>
		}
		else {
			echo 'Erreur de traitement <br>';
			fclose($fichier);
		} 	
	}
fclose($fichier);	
}

?>
<div class="conteneur">
<h2> Livre d'or</h2>
	<div id="livre_dor"> 
<?php
	$fichier = fopen("livre_dor.text","r");
	while($ligne = fgets($fichier)) {
		$ligne = rtrim($ligne); // suppresion du char de fin de ligne
		$info = explode(";",$ligne); // On separe les données

			foreach($info as $data) {
				echo "<p> $data</p>";
			}
		echo "<hr>";
	}
//}
?>
	</div>
</div>
<?php include('footer.html'); ?>
</body>
</html>
