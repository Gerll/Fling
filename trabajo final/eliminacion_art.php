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
  echo "$cve_materia";
  $sqlElimina= "DELETE FROM articulo WHERE id_art = '$id_art'";
mysql_query($sqlElimina, $link);

$my_error = mysql_error($link);

  if(!empty($my_error))
  {
    echo "<br>";
    echo "Ocurrio un error al eliminar. $my_error";
  }
  else
  {
    $salida="$id_art";
    echo "fue eliminado la materia '.$salida.' con exito";
 ?>
 <script language="javascript">
 alert("registro eliminado")
 window.location="home_administrador.php"
</script>
 <?php
  }
  ?>
</body>
</html>