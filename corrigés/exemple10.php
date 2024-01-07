<!DOCTYPE html>
<html>
<head>
<title>Exemple n°10</title>
</head>
<body>

<?php
// disable notice error
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// 
$array = [10, 13, 15, 20, 8, 7];

// display the array by grade ascending
echo "liste des valeurs par ordre descroissant <br />";
rsort($array);
foreach ($array as $value) {
	echo "$value <br>";
}

// make the mean of the grades
$total = 0;
foreach ($array as $value) {
	$total += $value;
}
$mean = $total / count($array);
echo "la moyenne est: $mean<br />";
?>

</body>
</html>
