
<?php
var_dump($foo); // => Undefined variable
var_dump($_SESSION); // => Undefined variable
session_start();
var_dump($_SESSION);  // => array (size=1)  'foo' => int 5
?>
