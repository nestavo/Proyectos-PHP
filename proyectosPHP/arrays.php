<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //arrays comienzan siempre de 0
/*$semana []="Lunes";// podemos o no escribir losindices
$semana []="Martes";
$semana []="Miercoles";
$semana []="Jueves";
$semana []="Viernes";*/

$semana= array ("Lunes","Martes","Miercoles","Jueves","Viernes");

sort($semana);//se oirdena alfabeticamente

for ($i=0; $i<count($semana); $i++){

   echo  $semana[$i] . "<br>";

}

/*$semana []="Sabado";

for ($i=0; $i<count($semana); $i++){

    echo  $semana[$i] . "<br>";
 
 }*/


//$datos=array("Nombre"=>"Nes","Apellido"=>"Martin","Edad"=>"30",);



/*echo $datos["Nombre"];
echo "<br>";
echo $datos["Apellido"];
echo "<br>";

if (is_array($datos)){


    echo"Es un array";
}else{

    echo"No es un array";

}*/

/*$datos["Pais"]="España";

foreach($datos as $clave=>$valor){//te inventas las claves valor

    echo "A $clave le corresponde $valor<br>";
}*/



?>
</body>
</html>