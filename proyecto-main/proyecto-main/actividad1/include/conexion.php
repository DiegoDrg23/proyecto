<?php
$host="localhost";
$usuario?"root";
$pass="";
$bd="ptactica1";
$link = mysql_connect($host, $usuario, $pass) or die (´No se pudo conectar:´. mysql_error());

echo ´conexion exitosa<br>´;
mysql_select_db($bd)
or die(´No se selecciono la base de datos´);
echo "Base de datos seleccionada:".$bd;



?>