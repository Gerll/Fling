<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

  <?php
include "conectaBD.php";

$result=mysql_query("select * from cliente Order By usuario",$link);




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



<form id="form1"  name="form1" method="post" action="Actualiza_datos_cliente.php" enctype="multipart/form-data">
 <table width="862" border="0" align="center">
  <td width="316" height="35" align="center">usuario que modificara</td>
      <td width="76">&nbsp;</td>
      <td width="456" height="35" align="center"><label for="fac"></label>
    <?PHP  
        echo'<select name="usuario">';
		
		while ($row=mysql_fetch_array($result))
        {
	     echo'<option value='.$row["usuario"].'>'.$row["usuario"].'</option>';
        }
          
		 ?>  
  </select></td>
  <td height="35"><input type="submit" name="button" id="button" value="Enviar" /></td>
  </table>
  </form>
 

</body>
</html>