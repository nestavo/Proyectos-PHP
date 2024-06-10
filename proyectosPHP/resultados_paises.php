<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

$pais = $_GET ["Buscar"];

require("datos_conexion.php");

$conexion=mysqli_connect($db_host, $db_usuario,$db_contra);

if(mysqli_connect_errno()){
    
    echo "".mysqli_connect_error();

    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");


$sql="SELECT SECCIÓN,NOMBREARTÍCULO, FECHA, PRECIO, PAISDEORIGEN FROM artículos WHERE PAISDEORIGEN = ?";

$resultado= mysqli_prepare($conexion, $sql);

$ok=mysqli_stmt_bind_param($resultado,"s", $pais);


$ok=mysqli_stmt_execute($resultado);

if($ok==false){
echo "Error al ejecutar la consulta";

}else{
    $ok=mysqli_stmt_bind_result($resultado,$seccion, $nombre, $fecha, $precio, $pais);

    echo "articulos encontrados: <br><br>";

    while(mysqli_stmt_fetch($resultado)){

        echo $seccion . "  ".  $nombre . "  " . $fecha . " ". $precio . "  " . $pais ."<br><br> ";

}
mysqli_stmt_close($resultado);
}

?>

</body>
</html>