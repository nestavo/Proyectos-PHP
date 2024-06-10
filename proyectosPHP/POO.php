<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include("vehiculos.php");
$mazda=new Coche("rojo", 4,2000);
$pegaso=new Camion();


echo "El mazda tiene ". $mazda->get_ruedas() . " ruedas<br>";
echo "El pegaso tiene ". $pegaso->get_ruedas() . " ruedas<br>";
echo "El mazda tiene ". $mazda->get_motor() . " de motor<br>";
$mazda->frenar();

print "<br>";

print "<br>";
$pegaso->frenar();
$pegaso->establece_color("blanco", "pegaso");

$pegaso->arrancar();
?>
</body>
</html>