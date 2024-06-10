<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexion= new mysqli("localhost", "root", "","pruebas");
    
    if($conexion->connect_errno){
        echo "Fallo la conexión" . $conexion->connect_errno;

    }

  //  mysql_set_charset($conexion, "utf8");

  $conexion->set_charset("utf8");

  $sql="SELECT * FROM artículos";

  //$resultados= mysqli_query($conexion, $sql);

  $resultados = $conexion-> query ($sql);

  if ($conexion->errno) {

    die ($conexion->error);
  }
//while( $fila = $resultados=mysqli_fetch_array($resultados, MYSQLI_ASSOC) ) {

  while ($fila = $resultados->fetch_array()) {
    echo"<table><tr><td>";
    echo $fila[0]. "</td><td>";
    echo $fila[1]. "</td><td>";
    echo $fila[2]. "</td><td>";
    echo $fila[3]. "</td><td>";
    echo $fila[4]. "</td><td></tr></table>";
    echo "<br><br>";
  }

  //mysqli_close($conexion);

  $conexion->close();
?>
</body>
</html>