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

    $nombre=$_POST["nombre_usuario"];
    $contra=$_POST["contra_usuario"];

   switch(true){

	case $nombre=="Nes" && $contra=="1234":
		
		echo "Usuario autorizado. Hola Nes";
		
		break;


		case $nombre=="María" && $contra=="5555":

			echo "Usuario autorizado. Hola María";

			break;

			case $nombre=="Pepe" && $contra=="1111":

				echo "Usuario autorizado. Hola Pepe";
	
				break;	

			default: //es como si fuera el else
			
			echo "Usuario no autorizado";
   }    
	
	/*if($usuario=="Nes" && $edad>=18){
        echo "<p class='validado'>Puedes entrar</p>";
    }else{
        echo "<p class=\"no_validado\">"."No puedes entrar"."</p>";
    }*/
   

}


?>