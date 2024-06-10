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

if(mysqli_connect_errno()){
echo "".mysqli_connect_error()."";
exit();
}

mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la base de datos");
//MYSQLI_SET_CHARSET($CONEXION,"UTF-8");  PREGUNTAR PORQUE NO VA QUIZAS SEA EN MINUSCULA

$consulta="INSERT INTO `artículos`(SECCIÓN, NOMBREARTÍCULO, FECHA, PAISDEORIGEN, PRECIO) VALUES ('ROPA','PANTALON','23/2/2022','ESPAÑA',23.99) ";

$resultados=mysqli_query($conexion,$consulta);



mysqli_close($conexion);//cierra conexion

?>
</body>
</html>