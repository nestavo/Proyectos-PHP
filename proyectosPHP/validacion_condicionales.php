<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
<?php
if(isset($_POST["enviando"])){

    $contra=$_POST["contra"];

	$nombre =$_POST["nombre_usuario"];

/*if ($edad<18)
{
    echo "Eres menor de edad. Notienes acceso";

}else{
	echo "Eres mayor de edad puedes acceder"
}*/

$resultado= $nombre=="Nes" && $contra==1234 ? "Puedes acceder": "NO Puedes acceder";

echo $resultado;

}


?>