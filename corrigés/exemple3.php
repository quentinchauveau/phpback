<!DOCTYPE html>
<html>
<head>
<title>Exemple N°3</title>
</head>
<body>
<!-- Debut du formulaire -->
<style>
	* {
		color : <?php if (isset($_POST) && isset($_POST['color'])) echo $_POST['color']; ?>;
	}
</style>
<form enctype="multipart/form-data" action="./exemple3.php" method="POST">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Envoyer les données :</label>
                <input name="text" type="text" />
				<br>
				<input name="color" type="radio" value="green"/>vert
				<input name="color" type="radio" value="red" />rouge
				<br>
				<?php if (isset($_POST) && isset($_POST['text'])) echo "<img src=\"".$_POST['text']."\"><br>"; ?>
                <input type="submit" name="submit" value="envoyé" />
            </p>
    </fieldset>
</form>
<!-- Fin du formulaire -->
<!-- Analyse des données -->
<?php
	if (isset($_POST)){
		print_r($_POST);
	}
?>
<!-- Fin d'analyse des données -->
</body>
</html>
