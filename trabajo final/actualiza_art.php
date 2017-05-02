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


$id_art=$_POST['id_art']; 
$nom_art=$_POST['nom_art']; 
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$tipo=$_POST['tipo'];
$descripcion=$_POST['descripcion'];

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


$sql="Update articulo Set nom_art='$nom_art', precio='$precio',cantidad='$cantidad',tipo='$tipo',descripcion='$descripcion',foto='$nombreArchivo' Where id_art='$id_art'";

mysql_query($sql); 


$my_error = mysql_error($link);

if(!empty($my_error)) {
echo "<br>";
echo "Ha habido un error al insertar los valores. $my_error";

} else {
$salida="$id_art";
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