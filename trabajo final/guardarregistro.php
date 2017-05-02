<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
include "conectaBD.php";
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
echo "<br>";
echo "$usuario<br>";
echo "$nombre<br>";
echo "$direccion<br>";
echo "$telefono<br>";
echo "$email<br>";
echo "<br>";
$_POST['password']== $_POST['password2'];
$ruta="./imagenes/";//ruta carpeta donde queremos copiar las imágenes
$exten=".jpg";//tipo de extencion
$nombreArchivo=$_FILES['fichero']['name'];
$nombreArchivo=$usuario.$exten;
echo "$nombreArchivo<br>";
if (move_uploaded_file($_FILES['fichero']['tmp_name'],$ruta.$nombreArchivo))
{
    echo "el archivo ".$nombreArchivo." ha sido cargado correcatamente";

}
else
{
echo "error";
}


$sql="INSERT INTO cliente values('$usuario','$password','$nombre','$direccion','$telefono','$email','$nombreArchivo', 1 )";
mysql_query($sql);



$my_error = mysql_error($link);

if(!empty($my_error)) {
echo "<br>";
echo "Ha habido un error en la captura de los datos. $my_error";



} else {
$salida="$usuario";
echo '<h1><div align="center">"the has registrado en kung pao: '.$salida.'"</div></h1>';
?>
<script language="javascript">
alert("Registro dado de alta")
window.location = "inicio.php"
</script>
<?PHP
}





?>
</body>
</html>