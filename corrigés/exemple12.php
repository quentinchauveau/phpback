<!DOCTYPE html>
<html>
<head>
<title>Exemple n°12</title>
</head>
<body>

<?php
// disable notice error
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$array = [
   0 => [
        'bleu',
        'vert',
        'jaune'
   ],
  1 => [
        'rouge',
        'orange',
        'blanc'
   ],
  2 => [
        'pourpre',
        'cyan' => [
              'magenta',
              'noir',
         ]
   ]
];
var_dump($array);
function foo ($array) {
	$str = '';
	foreach ($array as $key => $value) {
		if (is_array($value)) {
			$str .= "$key => <br />".foo ($value);
		} else {
			$str .= "&nbsp;&nbsp;$key => $value <br />";
		}
	}
	return $str;
}
echo foo ($array);

?>

</body>
</html>
