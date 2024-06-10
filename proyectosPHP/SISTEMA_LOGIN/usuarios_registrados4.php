<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();

if(!isset($_SESSION["usuario"])){

    header("Location:login.php");
}

?>

    <h1>Bienvenidos Usarios</h1>

    <?php
echo "Usuario: ". $_SESSION["usuario"]. "<br><br>";


?>
<a href="cierre.php">CERRAR SESION</a>
<br>
    <p> Esta informacion es solo para usuarios registrados</p>
    <br>
    <br>
    <a href="usuarios_registrados1.php">Volver</a> 
</body>
</html>