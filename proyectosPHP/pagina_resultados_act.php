<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$busqueda= $_GET["buscar"];


require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo "".mysqli_connect_error()."";
    exit();
}

//mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la base de datos");

//MYSQLI_SET_CHARSET($CONEXION,"UTF-8");  

$consulta="SELECT * FROM artículos WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

$resultados=mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

//echo"<table><tr><td>";

echo"<form action='Actualizar.php' method='get'>";

echo "<input type='text' name='sec' value='".  $fila['SECCIÓN'] ."'><br>";

echo "<input type='text' name='n_art' value='".  $fila['NOMBREARTÍCULO'] ."'><br>";

echo "<input type='text' name='fecha' value='".  $fila['FECHA'] ."'><br>";

echo "<input type='text' name='p_orig' value='".  $fila['PAISDEORIGEN'] ."'><br>";

echo "<input type='text' name='precio' value='".  $fila['PRECIO'] ."'><br>";


echo "<input type= 'submit' name 'enviando' value= 'Actualizar'>";

echo "</form>";

/*echo $fila['SECCIÓN']. "</td><td>";
echo $fila['NOMBREARTÍCULO']. "</td><td>";
echo $fila['FECHA']. "</td><td>";
echo $fila['PAISDEORIGEN']. "</td><td>";
echo $fila['PRECIO']. "</td><td></tr></table>";
echo "<br>";*/



}

mysqli_close($conexion);//cierra conexion

?>
</body>
</html>