<!DOCTYPE html>
<html>
<head>
<title>Exemple n°13</title>
</head>
<body>
<a href="./exemple13Bis.php">Mon lien</a>
<?php
// disable notice error
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// phpinfo();


// session
session_start();
$foo = 5;
$_SESSION["foo"] = $foo;
?>


</body>
</html>
