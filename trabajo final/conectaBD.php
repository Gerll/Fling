<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

$_mySqlHost="148.231.130.234";
$_mySql_User="alu36207";
$_mySql_Password="alumno07";
$_mySql_DB="alu36207";

$link=mysql_connect($_mySqlHost,$_mySql_User,$_mySql_Password)
or die("No se pudo conectar: " . mysql_error());

echo "Se conecto correctamente";

mysql_select_db($_mySql_DB,$link) or die("No se pudo seleccionar la base de datos");
?>
</body>
</html>