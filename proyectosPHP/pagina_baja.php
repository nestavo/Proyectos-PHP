<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php




require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$usuario= mysqli_real_escape_string($conexion, $_GET["usu"]);
$contra= mysqli_real_escape_string($conexion, $_GET["con"]);

if(mysqli_connect_errno()){
    echo "".mysqli_connect_error()."";
    exit();
}

//mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la base de datos");

//MYSQLI_SET_CHARSET($CONEXION,"UTF-8");  

//$consulta="SELECT * FROM artículos WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";
$consulta="DELETE  FROM usuario WHERE Nombre = '$usuario' AND CONTRA= '$contra'";

echo "$consulta <br> <br>";


/*if(mysqli_query($conexion,$consulta));

echo "Baja procesada";*/

mysqli_query($conexion, $consulta);

if (mysqli_affected_rows($conexion)> 0){
echo "Baja procesada";

}else{
echo "Se ha producido un error, PIRATA";
}




mysqli_close($conexion);//cierra conexion

?>
</body>
</html>