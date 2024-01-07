<!DOCTYPE html>
<html>
<head>
<title>Exemple n°5</title>
</head>
<body>

<?php
$prenom = "Pierre";
$age = 28;

echo "1 - Je m'appelle ".$prenom." et j'ai ".$age." ans <br>";
echo "2 - Je m'appelle $prenom et j'ai $age ans <br>";
echo "3 - Je m'appelle {$prenom} et j'ai {$age} ans <br>";
echo '4 - Je m\'appelle $prenom et j\'ai $age ans <br>';

// echo  sprintf("6 - Je m'appelle %s et j'ai %s ans <br>", $prenom, $age );
// printf("7 - Je m'appelle %s et j'ai %s ans <br>", $prenom, $age );

?>

</body>
</html>
