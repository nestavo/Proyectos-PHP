<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


//$busqueda=_$GET["buscar"];


$sec=$_GET["seccion"];
$nom=$_GET["n_art"];
$pre=$_GET["precio"];
$fec=$_GET["fecha"];
$por=$_GET["p_orig"];


require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
echo "".mysqli_connect_error()."";
exit();
}

mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la base de datos");
//MYSQLI_SET_CHARSET($CONEXION,"UTF-8");  PREGUNTAR PORQUE NO VA QUIZAS SEA EN MINUSCULA

$consulta="INSERT INTO `artículos`(SECCIÓN, NOMBREARTÍCULO, FECHA, PAISDEORIGEN, PRECIO) VALUES ('$sec','$nom','$fec','$por',$pre) ";

$resultados=mysqli_query($conexion,$consulta);

if($resultados==false){

    echo"error en la consulta";

}else{
    echo"REGISTRO GUARDADO <br><br>";

    echo "<table><tr><td>$sec</td></tr>";
    echo"<tr><td>$nom</td></tr>";
    echo"<tr><td>$fec</td></tr>";
    echo"<tr><td>$por</td></tr>";
    echo"<tr><td>$pre</td></tr></table>";

}

mysqli_close($conexion);//cierra conexion

?> 
</body>
</html>