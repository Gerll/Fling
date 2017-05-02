<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>consulta de lonches</title>
</head>

<?php  
include("conectaBD.php");
?>
<body>
 <div align="center">
    <table width="809" border="1">
      <tr>
       
    
        <th width="84" align="center" scope="col">id art</th>
        <th width="77" align="center" scope="col">Nombre</th>
        <th width="87" align="center" scope="col">precio</th>
        <th width="81" align="center" scope="col">cantidad</th>
        <th width="60" align="center" scope="col">tipo</th>
        <th width="180" align="center" scope="col">descripcion</th>
         <th width="180" align="center" scope="col">foto</th>



</tr>
      
      <?PHP
	$dir="imagenes/";
$result = mysql_query("select * from articulo where 
id_art = id_art
", $link);


while ($row=mysql_fetch_array($result))
{
    echo'<tr>'
	?>
     
       </td>
        <?PHP
      echo'<td>'.$row["id_art"].'</td>';
      echo'<td>'.$row["nom_art"].'</td>';
      echo'<td>'.$row["precio"].'</td>';
      echo'<td>'.$row["cantidad"].'</td>';
      echo'<td>'.$row["tipo"].'</td>';
      echo'<td>'.$row["descripcion"].'</td>';
      echo'<td><img src='.$dir.$row["foto"].' width=250 height=250></td>';
   echo '</tr>';
}

	?>
</table>


</body>
</html>