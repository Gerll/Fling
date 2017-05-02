<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
</body>
<?php
session_start();
include"conectaBD.php";
$nom_usuario=$_POST['nom_usuario'];
$password=$_POST['password'];
echo "$nom_usuario";
echo "$password";
$result = mysql_query("select count(*) existe  from administrador WHERE 
nom_usuario='$nom_usuario' and password='$password' and status=1", $link);

$existe=mysql_result($result,0,"existe");
if($existe=="0")
{
?>
<script language="javascript">
 alert("Usuario o Clave Invalida")
 window.location="inicio_administrador.php"
</script>
 <?PHP
}
else{
$_SESSION["validados"]="1";
header("Location:home_administrador.php");
}
?>
 </div>
<body>
</html>