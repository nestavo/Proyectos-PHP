<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$busqueda_nart=$_POST["n_art"];

try {

$base=new PDO("mysql:host=localhost; dbname=pruebas","root","");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");

//$sql = "SELECT SECCIÓN, NOMBREARTÍCULO, PAISDEORIGEN, PRECIO FROM artículos WHERE SECCIÓN = :SECC AND PAISDEORIGEN = :PORIG";

$sql= "DELETE FROM artículos WHERE NOMBREARTÍCULO = :n_art";

$resultado=$base->prepare($sql);

//$resultado->execute(array(":SECC"=> $busqueda_sec, "PORIG"=> $busqueda_porig));

//$resultado->execute(array(":seccion"=>$busqueda_sec, ":n_art"=>$busqueda_nart, ":fecha"=>$busqueda_fecha,":p_orig"=>$busqueda_porig, ":precio"=>$busqueda_precio));

$resultado-> execute(array(":n_art"=>$busqueda_nart));

echo "Registro eliminado";

$resultado->closeCursor();


} catch (PDOException $e) {
die("Error " . $e->getMessage());//muy  importante si hay error te dice donde está
   
  }finally {
$base=null;
  }


?>
</body>
</html>