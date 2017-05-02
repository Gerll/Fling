<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<script language="javascript">
function Valida_numero(campo){
  if(campo.value== "" || campo.value== " "  ) {
	    alert("El campo no debe de ir vacio")
		campo.focus()
		return false
  }
  if (isNaN(campo.value) ){
	   alert ("El campo debe ser Numerico")
	   campo.focus()
	   return false
  }
 }
function Valida_Nombre(campo){
	
	if(campo.value== "" || campo.value== " "  ) {
	    alert("El campo del Nombre no debe de ir vacio")
		campo.focus()
		return false
  }
    if (!isNaN(campo.value) ){
	   alert ("El campo del Nombre no debe ser Numerico")
	   campo.focus()
	   return false
  }
  
 }		  
</script>
<body>
 <h1 align="center">registrarse</h1>

  <form action="guardarregistro.php" method="post" enctype="multipart/form-data">
<table align="center" border="5" >
      <tr></tr>
 <th>usuario</th>
      <td><input type="text" name="usuario" ></td>
<tr></tr>
<th>contraseña</th>
      <td><input type="password" name="password" placeholder="contraseña" ></td>
      <tr></tr>
<th>confirmar contraseña</th>
      <td><input type="password" name="password2" placeholder="contraseña"></td>
         <tr></tr>
<th>nombre</th>
      <td><input type="text" name="nombre" onblur="Valida_Nombre(this)" ></td>
         <tr></tr>

<th>direccion</th>
      <td><input type="text" name="direccion"></td>
  <tr></tr>
<th>telefono</th>
      <td><input type="text" name="telefono"  ></td>
  <tr></tr>
<th>email</th>
      <td><input type="text" name="email"></td>
        <tr></tr>
 <th colspan="2">FOTO: <input name="fichero" type="file"></th>
 <tr></tr>   
  <td colspan="2" align="right" ><input name="submit" type="submit" value="Enviar" /></td>


</tr>


</table>
</body>
</html>