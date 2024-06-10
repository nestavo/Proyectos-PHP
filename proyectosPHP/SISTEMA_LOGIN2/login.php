<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php

if (isset ($_POST["enviar"])){
try{

    $base=new PDO("mysql:host=localhost; dbname=pruebas","root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";

    $resultado=$base->prepare($sql);

    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);

    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    if($numero_registro!=0){

        //echo "<h2> Adelante!!</h2>";

        session_start();
          
        $_SESSION["usuario"]=$_POST["login"];
    

      //  header("Location:usuarios_registrados1.php");



    }else{

      //  header("location:login.php");
      echo "Error no existe usuario o contraseña incorrecta";
    }

}catch(Exception $e){

    die("Error: " .$e->getMessage());


}
}


?>
<?php

IF (!isset($_SESSION["usuario"])){

            include("formulario.html");//INCLUYE EL FORMULARIO
}else{
    echo "Usuario: " . $_SESSION["usuario"];
}
?>
<br>
<br>
<br>

            <h1>CONTENIDO DE LA WEB </h1>
        </form>
    </div>


</body>
<br>


<br>

<table style="border: 2px solid #000; border-collapse: collapse;">

    <tr>
    
        <td style="background-color: #f2f2f2; text-align: center;"><img src="123.png" alt="Paisaje 1" style="width: 200px; height: 150px;"><p>Descripción del paisaje 1</p></td>
        <td style="background-color: #ffffff; text-align: center;"><img src="PLAYA.jpg" alt="Paisaje 2" style="width: 200px; height: 150px;"><p>Descripción del paisaje 2</p></td>
    </tr>
    <tr>
        <td style="background-color: #f2f2f2; text-align: center;"><img src="mar.jpg" alt="Paisaje 3" style="width: 200px; height: 150px;"><p>Descripción del paisaje 3</p></td>
        <td style="background-color: #ffffff; text-align: center;"><img src="io.jpeg" alt="Paisaje 4" style="width: 200px; height: 150px;"><p>Descripción del paisaje 4</p></td>
    </tr>
</table>

</html>