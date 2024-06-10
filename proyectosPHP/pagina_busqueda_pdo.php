<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$busqueda_sec= $_POST["seccion"];
$busqueda_porig= $_POST["p_orig"];
try {

$base=new PDO("mysql:host=localhost; dbname=pruebas","root","");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

$sql = "SELECT SECCIÓN, NOMBREARTÍCULO, PAISDEORIGEN, PRECIO FROM artículoss WHERE SECCIÓN = :SECC AND PAISDEORIGEN = :PORIG";

$resultado=$base->prepare($sql);

$resultado->execute(array(":SECC"=> $busqueda_sec, "PORIG"=> $busqueda_porig));

while($resgistro=$resultado->fetch(PDO::FETCH_ASSOC)) {

    echo "Nombre articulo: " . $resgistro["NOMBREARTÍCULO"] ." Seccion: ". $resgistro["SECCIÓN"] ." Precio: ". $resgistro["PRECIO"] . " Pais de origen: " . $resgistro["PAISDEORIGEN"]. "<br>";

}

$resultado->closeCursor();


} catch (PDOException $e) {
//die("Error " . $e->getMessage());
   echo $e->getCode();
  }finally {
$base=null;
  }


?>
</body>
</html>