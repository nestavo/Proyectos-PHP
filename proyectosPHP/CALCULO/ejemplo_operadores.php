<! doctype html>
<html>
<head>
<meta charset="utf8">
<title>Ensayo 1</title>
</head>
    <body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>suma</option>
            <option>resta</option>
            <option>multiplicación</option>
            <option>división</option>
            <option>módulo</option>
            <option>Incremento</option>
            <option>Decremento</option>
        </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>

    <p>&nbsp;</p>
<?php
include("calculadora.php");
if(isset($_POST["button"])){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    calcular($operacion);
 }


?>

    
    </body>
    </html>