<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#FFC;
			border:2px solid #F00;
			padding:5px;
			
		}
		
		td{
			text-align:center;
			
		}
		
		
		</style>
        
    </head>
    
    <body>
    
        <form action="pagina_eliminar_pdo.php" method="post">
        <table><tr>
          <td>
            
           <tr>
             <td> Sección </td><td><input type="text" name="seccion" id="seccion"></td></tr>
           <tr>
             <td>Nombre Art</td>
             <td><input type="text" name="n_art" id="n_art"></td>
           </tr>
           <tr>
             <td>Precio</td>
             <td><input type="text" name="precio" id="precio"></td>
           </tr>
           <tr>
             <td>Fecha </td>
             <td><input type="text" name="fecha" id="fecha"></td>
           </tr>
           <tr>
            
           </tr>
           <tr>
             <td>País de Origen</td>
             <td><input type="text" name="p_orig" id="p_orig"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Dale!">
        </td></tr></table>
        </form>
    
    </body>
    
</html>