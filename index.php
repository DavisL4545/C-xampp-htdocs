<?php
include once'conexion.php';
$conectar=new conexionPDO($host,$db,$user.$password);
$conectar->conectar();
echo"<br><br>"


$conectar->desconectar();
?>