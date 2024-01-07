<!DOCTYPE html>
<html>
<head>
<title>Exemple n°10</title>
</head>
<body>

<?php
// disable notice error
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// add an item to the array
// $array = array("bar","foo");
// $array[] = "value";
// var_dump($array);

// delete an item from the array
$array = array("bar","foo");
unset($array[0]);
var_dump($array);

?>

</body>
</html>
