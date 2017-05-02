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
$usuario=$_POST['usuario'];
$password=$_POST['password'];
echo "$usuario";
echo "$password";
$result = mysql_query("select count(*) existe  from cliente WHERE usuario='$usuario' and password='$password' and status=1", $link);

$existe=mysql_result($result,0,"existe");
if($existe=="0")
{
?>
<script language="javascript">
 alert("Usuario o Clave Invalida")
 window.location="inicio.php"
</script>
 <?PHP
}
else{
$_SESSION["validado"]="1";
header("Location:home.php");
$result2=mysql_query("Select * from cliente where usuario='$usuario'",$link);
$usuario=mysql_result($result2,0,"usuario");


        echo'<select name="usuario">';
		
		while ($row=mysql_fetch_array($result2))
        {
	     echo'<option value='.$row["usuario"].'>'.$row["usuario"].'</option>';
        }
          

}
?>
 </div>
<body>
</html>