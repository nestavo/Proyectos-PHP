<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    function ejecuta_consulta ($la_busqueda){




require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo "".mysqli_connect_error()."";
    exit();
}

//mysqli_select_db($conexion,$db_nombre)or die ("no se encuentra la base de datos");

//MYSQLI_SET_CHARSET($CONEXION,"UTF-8");  

$consulta="SELECT * FROM artículos WHERE NOMBREARTÍCULO LIKE '%$la_busqueda%'";

$resultados=mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

echo"<table><tr><td>";
echo $fila['SECCIÓN']. "</td><td>";
echo $fila['NOMBREARTÍCULO']. "</td><td>";
echo $fila['FECHA']. "</td><td>";
echo $fila['PAISDEORIGEN']. "</td><td>";
echo $fila['PRECIO']. "</td><td></tr></table>";
echo "<br>";



}

$mibusqueda = isset($_GET["buscar"]) ? $_GET["buscar"] : null;
mysqli_close($conexion);//cierra conexion
    }
?>
</head>
<body>
    <?php
   $mibusqueda =$_GET["buscar"];
   $mipag=$_SERVER["PHP_SELF"];

   if ($mibusqueda!=NULL){

    ejecuta_consulta($mibusqueda);

   }else{

    echo("<form action='". $mipag ."' method='get'>

    <label>Buscar:input type='text' name='buscar'>
    </label>

    <input type='submit' name='enviando' value='Dale!'>

    </form>");
 }



?>

</body>
</html>