<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$persona =[

"nombre"=>"Nes",
"edad"=> 20,
"ciudad"=>"Sevilla"


];

["nombre"=>$elNombre, "edad"=>$laEdad,"ciudad"=>$laCiudad]=$persona;


echo "nombre: $elNombre" . "<br>";
echo "edad: $laEdad" . "<br>";
echo "ciudad: $laCiudad" . "<br>";


   ?>
</body>
</html>