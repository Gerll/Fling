<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>consulta de clientes</title>
</head>

<body>
<?php  
include("conectaBD.php");
?>
<body>
 <div align="center">
    <table width="809" border="1">
      <tr>
        <th width="85" height="81" align="center" scope="col">usaurio</th>
        <th width="78" align="center" scope="col">password</th>
        <th width="88" align="center" scope="col">nombre</th>
        <th width="82" align="center" scope="col">direccion</th>
        <th width="81" align="center" scope="col">telefono</th>
        <th width="109" align="center" scope="col">email</th>
         <th width="240" align="center" scope="col">foto</th>
</tr>
      <?PHP
	$dir="imagenes/";
$result = mysql_query("select * from cliente where 
usuario = usuario
", $link);
while ($row=mysql_fetch_array($result))
{
    echo'<tr>'
	?>
      
        <?PHP
      echo'<td>'.$row["usuario"].'</td>';
      echo'<td>'.$row["password"].'</td>';
      echo'<td>'.$row["nombre"].'</td>';
      echo'<td>'.$row["direccion"].'</td>';
      echo'<td>'.$row["telefono"].'</td>';
      echo'<td>'.$row["email"].'</td>';
      echo'<td><img src='.$dir.$row["foto"].' width=250 height=250></td>';
   echo '</tr>';
}

	?>
</table>



</body>
</html>