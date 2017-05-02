<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <title>alta articulos</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      .container{margin-top:100px}
    </style>
  </head>
  
  
  <body >
  
  <?php
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

?>


<table width="733" height="250" border="1" align="center">
<tr>
  <td width="723">  <table width="722" height="250" border="1" align="center"><tr>
      <td width="180" height="240"><img src="simobolochino.jpg" width="180" height="240" /></td>
      <td width="778"><h1 align="center" class="Estilo2">restaurante de comida china </h1>
        <h1 align="center" class="Estilo2">kung pao</h1></td>
    </tr>
  </table>  
</table>
  
  <h1 align="center">registrar articulo en venta</h1>

  <form action="guardarregistro_art.php" method="post" enctype="multipart/form-data">
<table align="center" border="5" >
      <tr></tr>
 <th>codigo del articulo</th>
      <td><input type="text" name="id_art" ></td>
<tr></tr>
<th>nombre del articulo</th>
      <td><input type="text" name="nom_art" placeholder="nombre del articulo" ></td>
      <tr></tr>
<th>precio</th>
      <td><input type="text" name="precio" placeholder="precio"></td>
         <tr></tr>
<th>cantidad</th>
      <td><input type="text" name="cantidad" placeholder="cantidad" ></td>
         <tr></tr>

<th>tipo</th>
      <td><input type="text" name="tipo"></td>
  <tr></tr>
<th>descripcion del articulo</th>
      <td><input type="text" name="descripcion"  ></td>
  <tr></tr>

 <th colspan="2">FOTO: <input name="fichero" type="file"></th>
 <tr></tr>   
  <td colspan="2" align="right" ><input name="submit" type="submit" value="Enviar" /></td>


</tr>


</table>
  </body>
</html>