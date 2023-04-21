<?php


define('añool', 2023);
define('meses', 12);
define('dias', 365);
define('horas',24);

$año=2005;
$mayor=18;

$edad= años - $año;
$meses=$edad* meses;
$dias=$edad*dias;
$horas= dias*horas*$edad;

if (is_numeric($año)&& is_numeric($mayor)&& is_numeric($meses)&& is_numeric($dias)&& is_numeric($horas)):
  if ($edad >= $mayor):  
    echo "eres mayor de edad por que: ";
    echo "tienes: ".$edad." años de vida <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$dias." dias de vida <br>";
    echo "son: ".$horas." horas de vida <br>";
  else:
    echo "eres menor de edad por que: ";
    echo "tiene: ".$edad." años <br>";
    echo "son: ".$meses." meses <br>";
    echo "son: ".$dias." dias <br>";
    echo "son: ".$horas." horas <br>";
  endif;
else:
    echo "no hay valor ";
endif;
?>