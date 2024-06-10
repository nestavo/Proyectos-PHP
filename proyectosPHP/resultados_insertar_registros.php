<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

$secc = $_GET ["secc"];
$n_art = $_GET ["n_art"];
$fec = $_GET ["fec"];
$p_ori = $_GET ["p_ori"];
$pre = $_GET ["pre"];


require("datos_conexion.php");

$conexion=mysqli_connect($db_host, $db_usuario,$db_contra);

if(mysqli_connect_errno()){
    
    echo "".mysqli_connect_error();

    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");


$sql="INSERT INTO  artículos (SECCIÓN, NOMBREARTÍCULO, FECHA, PAISDEORIGEN, PRECIO)
 VALUES (?,?,?,?,?)";

$resultado= mysqli_prepare($conexion, $sql);

$ok=mysqli_stmt_bind_param($resultado,"ssssi", $secc, $n_art, $fec, $p_ori, $pre);


$ok=mysqli_stmt_execute($resultado);

if($ok==false){
echo "Error al ejecutar la consulta";

}else{
    //$ok=mysqli_stmt_bind_result($resultado,$seccion, $nombre, $fecha, $precio, $pais);

    echo "Agregado nuevos registro: <br><br>";

   /* while(mysqli_stmt_fetch($resultado)){

        echo $seccion . "  ".  $nombre . "  " . $fecha . " ". $precio . "  " . $pais ."<br><br> ";

}*/
mysqli_stmt_close($resultado);
}

?>

</body>
</html>