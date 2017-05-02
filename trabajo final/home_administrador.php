<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
include "conectaBD.php";
session_start();

 if($_SESSION["validados"]!="1")

{
	?>
	<script language="javascript">
               alert("Error Validar Usuario")
			   window.location="Inicio_administrador.php"
               </script>
<?PHP
}

?>

<table width="733" height="250" border="1" align="center">
<tr>
  <td width="723">  <table width="726" height="250" border="1" align="center"><tr>
      <td width="180" height="240"><a href="home.php" ><img src="simobolochino.jpg" width="180" height="240" /></a></td>
      <td width="530"><h1 align="center" class="Estilo2">restaurante de comida china </h1>
        <h1 align="center" class="Estilo2">kung pao</h1></td>
    </tr>
  </table>  
</table>


<h1 align="center">gestion de articulos </h1>

<table align="center" width="450" border="4">
  <tr>
    <td colspan="2"><a href="alta_art.php"> <h3 align="center"> agregar articulos </h3></a></td>

  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    
  </tr>
  <tr>
  <td colspan="2"><a href="modificar_art.php"> <h3 align="center"> modificar articulos </h3></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>

  </tr>
  <tr>
   <td colspan="2"><a href="eliminar_art.php"> <h3 align="center"> eliminar articulos </h3></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>

  </tr>
  <tr>
    <td colspan="2"><a href="consulta_art.php"> <h3 align="center"> consulta articulos </h3></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>

  </tr>
</table>


<h1 align="center">gestion de clientes </h1>

<table align="center" width="450" border="4">
  <tr>
    <td colspan="2"><a href="alta_cliente.php"> <h3 align="center"> agregar clientes</h3></a></td>

  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    
  </tr>
  <tr>
  <td colspan="2"><a href="modificar_cliente.php"> <h3 align="center"> modificar clientes </h3></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>

  </tr>
  <tr>
   <td colspan="2"><a href="eliminar_cliente.php"> <h3 align="center"> eliminar clientes </h3></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>

  </tr>
  <tr>
    <td colspan="2"><a href="consulta_cliente.php"> <h3 align="center"> consulta clientes</h3></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>

  </tr>
</table>





</body>
</html>