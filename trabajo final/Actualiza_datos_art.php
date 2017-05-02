<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<table width="733" height="250" border="1" align="center">
<tr>
  <td width="723">  <table width="722" height="250" border="1" align="center"><tr>
      <td width="180" height="240"><img src="simobolochino.jpg" width="180" height="240" /></td>
      <td width="778"><h1 align="center" class="Estilo2">restaurante de comida china </h1>
        <h1 align="center" class="Estilo2">kung pao</h1></td>
    </tr>
  </table>  
</table>

 <?php
  $id_art= $_POST['id_art']; 

include "conectaBD.php"; 

session_start();

 if($_SESSION["validados"]!="1")

{
	?>
	<script language="javascript">
               alert("Error Validar Usuario")
			   window.location="Inicio_administracion.php"
               </script>
<?PHP
}
  $query = "select * from articulo where id_art = '$id_art'"; 
    $result = mysql_query($query); 
  
  
while ($registro = mysql_fetch_array($result)){ 

echo " 
<body> 

<div align='center'> 
    <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'> 
        <tr> 
            <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td> 
        </tr> 
        <tr> 
           
        </tr> 
        <form method='POST' action='actualiza_art.php'> 
        <tr> 
            <td width='50%'>&nbsp;</td> 
            <td width='50%'>&nbsp;</td> 
        </tr> 
        <tr> 
            <td width='50%'><p align='center'><b>id_art: </b></td> 
            <td width='50%'><p align='center'><input type='text' name='id_art' readonly='readonly'  size='20' value='".$registro['id_art']."'></td> 
        </tr> 
        <tr> 
            <td width='50%'><p align='center'><b>nom_art</b></td> 
            <td width='50%'><p align='center'><input type='text' name='nom_art' size='20' value='".$registro['nom_art']."'></td>
			</tr> 
        <tr> 
            <td width='50%'><p align='center'><b>precio</b></td> 
            <td width='50%'><p align='center'><input type='text' name='precio' size='20' value='".$registro['precio']."'></td>
			</tr> 
        <tr> 
		 <tr> 
            <td width='50%'><p align='center'><b>cantidad</b></td> 
            <td width='50%'><p align='center'><input type='text' name='cantidad' size='20' value='".$registro['cantidad']."'></td>
			</tr> 
        
		 <tr> 
            <td width='50%'><p align='center'><b>tipo</b></td> 
            <td width='50%'><p align='center'><input type='text' name='tipo' size='20' value='".$registro['tipo']."'></td>
			</tr> 
        
		<tr> 
		  <td width='50%'><p align='center'><b>descripcion</b></td> 
           <td width='50%'><p align='center'><input type='text' name='descripcion' size='20' value='".$registro['descripcion']."'></td>
			</tr> 
         <tr> 
            <td width='50%'><p align='center'><b>foto</b></td> 
            <td width='50%'><p align='center'><input name='fichero' type='file' size='20' value='".$registro['foto']."'></td>
			</tr> 
            <td width='100%' colspan='2'> 
            <p align='center'> 
            <input type='submit' value='Actualizar datos' name='B1'></td> 
        </tr> 
        </form> 
    </table> 
</div> 
"; 
  }
  
  
  ?>
  

</body>
</html>