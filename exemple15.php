<!DOCTYPE html>
<html>
<head>
<title>Exemple n°15</title>
</head>
<body>
<?php
class Person
{
   var $name;
   var $firstname;
   function __construct($name = "Dupont", $firstname = "Jean") {
        $this->name = $name;
        $this->firstname = $firstname;
   }
   function __toString() {
		return json_encode($this);
   }
}

class Cop extends Person
{
	var $job = "cop";
	var $gun = true;
	function __construct($nom = "Dupont", $prenom = "Jean") {
        parent::__construct($nom, $prenom);
	}
}

$jean = new Person("jean", "gabin");
var_dump($jean );
// echo "$jean <br />";

$jean = new Cop("jean", "gabin");
var_dump($jean );
// echo "$jean <br />";

?>
</body>
</html>
