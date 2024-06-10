<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

/*function incrementa (&$valor1){
    $valor1++;

    return $valor1;

}

$numero=5;
echo incrementa ($numero) . "<br>";

echo $numero;*/

function cambia_mayus (&$param){
    $param=strtolower($param);
    $param=ucwords($param);

    return $param;
}
$cadena="hOlA MuNdO";

echo cambia_mayus($cadena). "<br>";

echo $cadena;




   ?> 
</body>
</html>