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
echo "Hola: ". $_SESSION["usuario"]. "<br><br>";

?>
<a href="cierre.php">CERRAR SESION</a>
<br>


<table style="border: 2px solid #000; border-collapse: collapse;">
      <tr>
          <td style="background-color: #f2f2f2; font-size: 18px;"><p>Esta información es solo para usuarios registrados</p></td>
      </tr>
      <tr>
          <td style="background-color: #ffffff; font-size: 18px;"><a href="usuarios_registrados2.php">Página de Usuarios Registrados 2</a></td>
      </tr>
      <tr>
          <td style="background-color: #f2f2f2; font-size: 18px;"><a href="usuarios_registrados3.php">Página de Usuarios Registrados 3</a></td>
      </tr>
      <tr>
          <td style="background-color: #ffffff; font-size: 18px;"><a href="usuarios_registrados4.php">Página de Usuarios Registrados 4</a></td>
      </tr>
  </table>
    <br>
    <br>

</body>
</html>
