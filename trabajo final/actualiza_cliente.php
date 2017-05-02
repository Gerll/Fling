<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php 
include('conectaBD.php');   


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


$usuario=$_POST['usuario']; 
$nombre=$_POST['nombre']; 
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];


$ruta="./imagenes/";//ruta carpeta donde queremos copiar las imágenes
$exten=".jpg";//tipo de extencion
$nombreArchivo=$_FILES['fichero']['name'];
$nombreArchivo=$id_art.$exten;
echo "$nombreArchivo<br>";
if (move_uploaded_file($_FILES['fichero']['tmp_name'],$ruta.$nombreArchivo))
{
    echo "el archivo ".$nombreArchivo." ha sido cargado correcatamente";

}
else
{
echo "error";
}


$sql="Update cliente Set nombre='$nombre', direccion='$direccion',telefono='$telefono',email='$email',foto='$nombreArchivo' Where usuario='$usuario'";

mysql_query($sql); 


$my_error = mysql_error($link);

if(!empty($my_error)) {
echo "<br>";
echo "Ha habido un error al insertar los valores. $my_error";

} else {
$salida="$usuario";
echo '<h1><div align="center">"el articulo se actualizo: '.$salida.'"</div></h1>';
?>
<script language="javascript">
alert("Registro actualizado")
window.location = "home_administrador.php"
</script>
<?PHP
}

?>


</body>
</html>