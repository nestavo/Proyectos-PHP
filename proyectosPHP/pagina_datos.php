<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$usuario= $_GET["usu"];
$contra= $_GET["con"];


require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo "".mysqli_connect_error()."";
    exit();
}

//mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la base de datos");

//MYSQLI_SET_CHARSET($CONEXION,"UTF-8");  

//$consulta="SELECT * FROM artículos WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
$consulta="SELECT * FROM usuario WHERE Nombre = '$usuario' AND CONTRA= '$contra'";

echo "$consulta <br> <br>";


$resultados=mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

echo"<table><tr><td>";
echo $fila['Nombre']. "</td><td>";
echo $fila['Contra']. "</td><td>";
echo $fila['tlf']. "</td><td>";
echo $fila['direccion']. "</td><td></tr></table>";
echo "<br>";



}

mysqli_close($conexion);//cierra conexion

?>
</body>
</html>