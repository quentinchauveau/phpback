<!DOCTYPE html>
<html>
<head>
<title>Exemple n°11</title>
</head>
<body>

<?php
// disable notice error
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// fonctions avec variables
$var = 5;
function bar ( $var ) {
	$var *= 2;
}
bar($var);
var_dump($var);

// function baz ( &$var ) {
	// $var *= 2;
// }
// baz($var);
// var_dump($var);

// fonctions avec tableau
// $array = [10, 13, 15, 20, 8, 7];
// function foo ( $arr ) {
	// $arr[] = 5;
// }
// foo($array);
// var_dump($array);

// fonctions avec les classes
// class A {
	// public $b = 5;
// }
// function bar ($a) {
	// $a->b *= 2;
// }
// $a = new A();
// bar($a);
// var_dump($a);


?>

</body>
</html>
