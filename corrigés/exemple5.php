<!DOCTYPE html>
<html>
<head>
<title>Exemple n°5</title>
</head>
<body>

<?php
$amount = 1000;
$friends = 55;

echo sprintf("$amount € divisé entre $friends amis donne %.2f € par personne", $amount / $friends);
echo "<br />";
echo "<br />";
echo sprintf("$amount € divisé entre $friends amis donne %.2f € par personne, ce qui resprésente %.1f%% du montant total", $amount / $friends, $friends * 100 / $amount);

?>

</body>
</html>
