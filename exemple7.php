<!DOCTYPE html>
<html>
<head>
<title>Exemple n°7</title>
</head>
<body>

<?php
// disable notice error
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// good
// $t = 5;
// echo "$t <br />";

// no gound, fatal error, start with a number
// $4site = 'invalid ';  
// echo "$4site <br />";

// not gound but works, start with an underscore
// $_site = 'invalid ';  
// echo "$_site <br />";

// no good, fatal error, cannot reassign reserved variables
// $this = 5;
// echo $this;

// assignation by value
// $foo = 'Pierre';              // Assigne la valeur 'Pierre' à $foo
// $bar = $foo;                 // Référence $foo avec $bar.
// $bar = "Mon nom est $bar";  // Modifie $bar...
// echo "\$foo =  $foo <br >";   
// echo "\$bar =  $bar <br >";                   // $foo n'est pas modifiée

// assignation by reference
// $foo = 'Pierre';              // Assigne la valeur 'Pierre' à $foo
// $bar = &$foo;                 // Référence $foo avec $bar.
// $bar = "Mon nom est $bar";  // Modifie $bar...
// echo "\$foo =  $foo <br >";    // $foo est aussi modifiée
// echo "\$bar =  $bar <br >";  

// variable not initialize  (trigger php notice)
// var_dump($unknown);
// echo $unset_bool ? "true\n" : "false\n";

// Utilisation d'une chaîne de caractères; retourne 'string(3) "abc"'
// $unset_str .= 'abc';
// var_dump($unset_str);

// Utilisation d'un entier; retourne 'int(25)'
// $unset_int += 25; // 0 + 25 => 25
// var_dump($unset_int);

// Utilisation d'un float; retourne 'float(1.25)'
// $unset_float += 1.25;
// var_dump($unset_float);


?>

</body>
</html>
