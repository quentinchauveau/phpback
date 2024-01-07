<!DOCTYPE html>
<html>
<head>
<title>Exemple N°2</title>
</head>
<body>
<!-- Debut du formulaire -->
<form enctype="multipart/form-data" action="./exemple2.php" method="GET">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Envoyer les données :</label>
                <input name="text" type="text" />
				<br>
				<input name="color" type="radio" value="green"/>vert
				<input name="color" type="radio" value="red" />rouge
				<br>
                <input type="submit" name="submit" value="envoyé" />
            </p>
    </fieldset>
</form>
<!-- Fin du formulaire -->
<!-- Analyse des données -->
<?php
	if (isset($_GET)){
		print_r($_GET);
	}
?>
<!-- Fin d'analyse des données -->
</body>
</html>
