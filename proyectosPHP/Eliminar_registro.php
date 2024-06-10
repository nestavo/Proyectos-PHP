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

$consulta="DELETE FROM artículos WHERE SECCIÓN='$sec' ";

$resultados=mysqli_query($conexion,$consulta);

if($resultados==false){

    echo"error en la consulta";

}else{
    //echo"REGISTRO ELIMINADO <br><br>";
    
   // echo mysqli_affected_rows($conexion);

   if (mysqli_affected_rows($conexion)== 0){//funcion importante
    
    echo"No hay registros que eliminar con ese criterio";
   }else{
    echo"Se han eliminado " . mysqli_affected_rows($conexion) . " registro";
   }}

mysqli_close($conexion);//cierra conexion

?> 
</body>
</html>