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

 if($_SESSION["validado"]!="1")

{
	?>
	<script language="javascript">
               alert("Error Validar Usuario")
			   window.location="Inicio.php"
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

<body>
 <div align="center">
    <table width="900" border="1">
      <tr>
        <th width="194" scope="col">Accion</th>
        <th width="159" scope="col">nom_art</th>
        <th width="127" scope="col">precio</th>
        <th width="53" scope="col">tipo</th>
        <th width="139" scope="col">descripcion</th>
        <th width="188" scope="col">Foto</th>
      </tr>
      <?PHP
	$dir="imagenes/";
	$result3 = mysql_query("select * from articulo 
where 
id_art= id_art
", $link);
while ($row=mysql_fetch_array($result3))
{
    echo'<tr>'
	?>
      <td>
      <input type="image" name="imprimir kardex" onclick="imp_kardex('<?php echo $row['id_art'] ?>')" 
      title="imprimir kardex" src="imprimir.png" width=20 height=20  />
           <input type="image" name="menu calificacion" onclick="menu_califi('<?php echo $row['id_art'] ?>')" 
      title="menu calificacion" src="califi.png" width=20 height=20  />  
          <input type="image" name="alta carga " onclick="menu_carga('<?php echo $row['id_art'] ?>')" 
      title="menu carga" src="carga.png" width=20 height=20  />     
       </td>
        <?PHP
      echo'<td>'.$row["nom_art"].'</td>';
      echo'<td>'.$row["precio"].'</td>';
      echo'<td>'.$row["tipo"].'</td>';
      echo'<td>'.$row["descripcion"].'</td>';
      echo'<td><img src='.$dir.$row["foto"].' width=300 height=320></td>';
   echo '</tr>';
}
	?>
    </table>



</body>
</html>