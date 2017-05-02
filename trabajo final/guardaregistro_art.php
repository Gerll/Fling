<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
include "conectaBD.php";
$id_art=$_POST['id_art'];
$nom_art=$_POST['nom_art'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$tipo=$_POST['tipo'];
$descripcion=$_POST['descripcion'];
echo "<br>";
echo "$id_art<br>";
echo "$nom_art<br>";
echo "$precio<br>";
echo "$cantidad<br>";
echo "$tipo";
echo "$descripcion<br>";
echo "<br>";
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
$sql="INSERT INTO articulo values('$id_art','$nom_art','$precio','$cantidad','$tipo' ,'$descripcion','$nombreArchivo' )";
mysql_query($sql);


$my_error = mysql_error($link);


if(!empty($my_error)) {
echo "<br>";
echo "Ha habido un error en la captura de los datos. $my_error";
} else {
$salida="$id_art";
echo '<h1><div align="center">"the has registrado en kung pao: '.$salida.'"</div></h1>';
?>
<script language="javascript">
alert("Registro dado de alta")
window.location = "inicio_administrador.php"
</script>
<?PHP
}





?>
</body>
</html>